<?php
$con = mysqli_connect('localhost','root','','farmerdb');
	if (!$con) {
		 die('Could not connect: ' . mysqli_error($con));
		 }
		 
echo "Connected successfully";

$sql="
    insert into FARMER (fname,lname,location,phone)
    values ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["location"]."','".$_POST["phone"]."')	;
    ";
	
if (mysqli_query($con, $sql)) {
    echo " successfully done";
    header('Location: update_db.html');
} else {
    echo "Error Deej: " . $con->error;
}
mysqli_close($con);
?>