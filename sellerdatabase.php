<!DOCTYPE html>
<html>
<head>
   <!-- <style>
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
</style> -->
<link rel="stylesheet" href="/css/ultimate.css">
</head>
<body>

<?php

$con = mysqli_connect('localhost','root','','farmerdb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql ="	SELECT SELLER.sfid, FARMER.fname, FARMER.lname, SELLER.sproduceid, SELLER.amount, SELLER.deliverydate 
    FROM SELLER 
        join FARMER on SELLER.SFID =  FARMER.fid ORDER BY deliverydate DESC;";

$result = mysqli_query($con,$sql);



echo "<table>
<tr>
<caption>Seller Database</caption>
<th>Seller's ID</th>
<th>Seller's First Name</th>
<th>Seller's Last Name</th>
<th>Produce's ID</th>
<th>Amount (lbs)</th>
<th>Delivery Date</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['sfid'] . "</td>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['sproduceid'] . "</td>";
    echo "<td>" . $row['amount'] . "</td>";
    echo "<td>" . $row['deliverydate'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>