<?php
$con = mysqli_connect('localhost','root','','farmerdb');
	if (!$con) {
		 die('Could not connect: ' . mysqli_error($con));
		 }
		 
echo "Connected successfully";

$sql="
    insert into CONSUMERS (name,location,phone)
    values ('".$_POST["name"]."','".$_POST["location"]."','".$_POST["phone"]."')	;
    ";
	
if (mysqli_query($con, $sql)) {
    echo " successfully done";
    header('Location: insertcustomer_db.html');
} else {
    echo "Error Deej: " . $con->error;
}
mysqli_close($con);
?>

