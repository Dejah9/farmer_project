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
$sql ="SELECT LAND_SIZE.l_id,FARMER.fname, FARMER.lname, LAND_SIZE.lsize 
        FROM LAND_SIZE
            JOIN FARMER ON LAND_SIZE.l_id = FARMER.fid ORDER BY fname";

$result = mysqli_query($con,$sql);



echo "<table>
<tr>
<caption>Land Size Database</caption>
<th>Land's ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Land Size(Acers)</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['l_id'] . "</td>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['lsize'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>