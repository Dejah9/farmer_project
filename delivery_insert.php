<?php
$con = mysqli_connect('localhost','root','','farmerdb');
	if (!$con) {
		 die('Could not connect: ' . mysqli_error($con));
		 }

if (isset($_POST['submit'])){
    $sql1="insert into SELLER (sfid,sproduceid,amount,deliverydate)
    values ('".$_POST["farmer_id"]."','".$_POST["produce_id"]."','".$_POST["amount"]."','".$_POST["deliverydate"]."')";
    
#$result=mysql_query($con,$sql);
    $result2=mysqli_query($con,$sql1);

    if (mysqli_affected_rows($con) > -1) {
        //echo "Delivery added successfully";
        header("Refresh:8 url=delivery_.php");
    } else {
        echo "Error Deej: " . $con->error;
    }
    mysqli_close($con);
    
}

?>