<html><head>
	<title>Delivery Entry</title>
	  <link href="/css/style.css" type="text/css" rel="stylesheet">

<script>

	function f8(){
				window.location = "/try.html";
			}
	
</script>


</head>
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
	<!--
	<div class="navbar">
  <a href="try.html">Home</a>
  <a href="consumerdatabase.html">Consumer Information</a>
  <a href="farmerdatabase.html">Farmer Information</a>
  <a href="landdatabase.html">Land Information</a>
  <a href="producedatabase.html">Produce Information</a>
  <a href="sellerdatabase.html">Seller Information</a>
  
  

  <div class="dropdown">
    <button class="dropbtn">Update Information 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="">Consumer Info</a>
      <a href="#">Farmer Info</a>
      <a href="#">Land Size Info </a>
      <a href="#">Produce Info </a>
      <a href="#">Produce Info </a>
      <a href="#">Seller Info </a>
    </div>
 
  </div> -->
  
<!--<a href="index.html">Logout</a>-->
</div>

<?php
$con = mysqli_connect('localhost','root','','farmerdb');
	if (!$con) {
		 die('Could not connect: ' . mysqli_error($con));
		 }

$sql="Select * from FARMER order by fname";
$sql2="Select * from PRODUCE";

$query1=mysqli_query($con,$sql);
$query2=mysqli_query($con,$sql2);


$opt="<select name ='l_id' required><option value=0></option>";
//$opt2="<select name='produce_id' required><option value=0></option>";

while($row=mysqli_fetch_assoc($query1)){
    $opt.="<option value=".$row['fid'].">".$row['fid'].' '.$row['fname'].' '.$row['lname']."</option>";
}
$opt.="</select>";

/*while($row=mysqli_fetch_assoc($query2)){
    $opt2.="<option value=".$row['produceid'].">".$row['produceid'].' '.$row['food']."</option>";
}
$opt2.="</select>";*/

?>
	
    <div id="header"></div>
    <div class="body-content">

	<div class="module">
	    
	<h3> Add Land information to Records</h3>
	<p>Please complete the following.</p>
	
	<form id="Sale_form" class="form" method="POST" action="insert_landsize.php" enctype="multipart/form-data"> 
	<div class="alert alert-success"> </div>

	
	
	<br>
	<br>
    Farmer ID: <?php echo $opt; ?>  
 	<br>
	<br>
	

	Land size (acres): <input id="landsize" type="int" name="lsize" required="">
	<br>
	<br>

	<input type="submit" name="submit" value="Submit" required="">

	
	
	</form>
	<br><br>
	</div>
	<div id="footer"></div>
</div>
		<!-- javascript-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/Chart.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	
	<link rel="stylesheet" href="js/jquery-ui.min.css">
	<link rel="stylesheet" href="js/jquery-ui.css">
	
		<script> 
	$("#header").load("header.html");
	$("#footer").load("footer.html");
	</script>
	
	<link href="/css/formpages.css" type="text/css" rel="stylesheet">

</body></html>