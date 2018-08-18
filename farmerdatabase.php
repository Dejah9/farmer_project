<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="/css/ultimate.css">
</head>
<body>

<?php

$con = mysqli_connect('localhost','root','','farmerdb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql ="SELECT fid, fname, lname, location, phone FROM FARMER ORDER BY fname";

$result = mysqli_query($con,$sql);



echo "<table>
<tr>
<caption>Farmer Database</caption>
<th>Farmer's ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Location</th>
<th>Phone</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['fid'] . "</td>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['location'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>