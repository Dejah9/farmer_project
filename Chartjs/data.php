<?php
/*$_COOKIE['StartDate'] = $_POST["StartDate"];
$_COOKIE['EndDate'] = $_POST["EndDate"];*/

//setting header to json
header('Content-Type: application/json');

	$con = mysqli_connect('localhost','root','','farmerdb');
	if (!$con) {
		 die('Could not connect: ' . mysqli_error($con));
		 }

mysqli_select_db($con,"ajax_demo");
//mysqli_select_db($con,"ajax_demo");


//if (isset($_POST['submit'])){	



$sql ="select PRODUCE.food, SELLER.amount 
	from SELLER 
	join FARMER on SELLER.sfid = FARMER.fid
	join PRODUCE on SELLER.sproduceid = PRODUCE.produceid
	where SELLER.deliverydate between '".$_POST["StartDate"]."'and '".$_POST["EndDate"]."';
";

$result = mysqli_query($con,$sql);

$data = array();
foreach ($result as $row){
    $data[] = $row;
    }

mysqli_close($con);

echo json_encode($data);

?>