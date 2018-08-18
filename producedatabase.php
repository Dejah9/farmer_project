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
$sql ="SELECT produceid, food FROM PRODUCE order by food";

$result = mysqli_query($con,$sql);



echo "<table>
<tr>
<caption>Produce Database</caption>
<th>Produce's ID</th>
<th>Food</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['produceid'] . "</td>";
    echo "<td>" . $row['food'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>