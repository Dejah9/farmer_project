<?php
$con = mysqli_connect('localhost','root','','farmerdb');
	if (!$con) {
		 die('Could not connect: ' . mysqli_error($con));
		 
	    
	};
	
	else{
	    echo "Connected successfully";
	}
		
?> 