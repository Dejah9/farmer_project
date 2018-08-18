<!DOCTYPE html>
<html>
   
<body>
    	<header>
		<nav>
			<script src="//code.jquery.com/jquery.min.js"></script>
			
			<script>
			$.get("nav.html", function(data){
				$("#nav-placeholder").replaceWith(data);
				});
			</script>
			
			<div id="nav-placeholder">
		</nav>
	</header>
    
        <br><br>

<h1>My first PHP page</h1>



<?php
$con = mysqli_connect('localhost','root','','farmerdb');
	if (!$con) {
		 die('Could not connect: ' . mysqli_error($con));
		 }
		 
echo "Connected successfully";
/*
$sql = "
    insert into FARMER (fname,lname,location,phone) 
    values ('James','Bond','Peru','2563656875')
";
if (mysqli_query($con, $sql)) {
    echo " successfully done";
    header('Location: recordsale.html');
} else {
    echo "Error Deej: " . $con->error;
}

mysqli_close($con);*/
?> 

</body>

</html>