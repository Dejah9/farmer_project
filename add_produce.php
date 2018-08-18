<?php
$con = mysqli_connect('localhost','root','','farmerdb');
	if (!$con) {
		 die('Could not connect: ' . mysqli_error($con));
		 }
		 
echo "Connected successfully";

$sql="
    insert into PRODUCE (food)
    values ('".$_POST["food"]."');
    ";
	
if (mysqli_query($con, $sql)) {
    echo " successfully done";
    header('Location: update_db.html');
} else {
    echo "Error Deej: " . $con->error;
}
mysqli_close($con);
?>