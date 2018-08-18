<?php
$con = mysqli_connect('localhost','root','','farmerdb');
	if (!$con) {
		 die('Could not connect: ' . mysqli_error($con));
		 }

if (isset($_POST['submit'])){
    $sql1="insert into LAND_SIZE (l_id, lsize)
    values ('".$_POST["l_id"]."','".$_POST["lsize"]."')";
    
#$result=mysql_query($con,$sql);
    $result2=mysqli_query($con,$sql1);

    if (mysqli_affected_rows($con) > -1) {
        //echo "Delivery added successfully";
        header("Refresh:8 url=insert_landsize_form.php");
    } else {
        echo "Error Deej: " . $con->error;
    }
    mysqli_close($con);
    
}

?>