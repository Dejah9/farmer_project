

<!Doctype html>
<html>
<head>
	<title>Sales</title>

	<style type="text/css">
		#chart-container{
			width: 640px;
			height: auto;
		}
	</style>


</head>
<body>
	
	<form id = "form" method = "POST" action ="data.php"> 
	
	<input type="date" name="day"/>
	<br>
	<br>
	Start: <input id ="date" type="text" name="StartDate"/>
	<br>
	<br>
	End: <input id ="endD" type="text" name="EndDate" />
	<br>
	<br>
	<input type="submit" name="submit" value= "Submit"/>
	
	</form>
	
		<!-- javascript-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/Chart.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	
	<link rel="stylesheet" href="js/jquery-ui.min.css">
	<link rel="stylesheet" href="js/jquery-ui.css">
	<script src="js/app.js"></script>

</body>
</html>