<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    background-color: #dddddd;
}

td, th {
    border: 1px solid black;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

</style>
<link rel="stylesheet" href="/css/ultimate.css">
</head>
<body>

<?php

$con = mysqli_connect('localhost','root','','farmerdb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql ="SELECT c_id, name, location, phone FROM CONSUMERS";

$result = mysqli_query($con,$sql);



echo "<table>
<tr>
<caption>Consumer Database</caption>
<th>Consumer's ID</th>
<th>Name</th>
<th>Location</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['c_id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['location'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>