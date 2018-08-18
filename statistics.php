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
$sql ="SELECT YEAR(deliverydate) as SalesYear,
         MONTH(deliverydate) as SalesMonth,
         SELLER.sproduceid as ProduceID,
         SUM(amount) AS TotalSales
    FROM SELLER where SELLER.sproduceid > 0
GROUP BY YEAR(deliverydate), MONTH(deliverydate)
ORDER BY YEAR(deliverydate)DESC, MONTH(deliverydate)";

/*"SELECT YEAR(deliverydate) as SalesYear,
         MONTH(deliverydate) as SalesMonth,
         SELLER.sproduceid as ProduceID,
         SUM(amount) AS TotalSales
    FROM SELLER where SELLER.sproduceid > 0
GROUP BY YEAR(deliverydate), MONTH(deliverydate)
ORDER BY YEAR(deliverydate)DESC, MONTH(deliverydate)";*/


/*"select PRODUCE.food, SELLER.amount, MONTH.month_name from SELLER
join FARMER on SELLER.sfid = FARMER.fid
join PRODUCE on SELLER.sproduceid= PRODUCE.produceid
join MONTH on MONTH(deliverydate) = MONTH.month_id
where SELLER.sfid = '".$_POST["farmer_id"]."'
order by MONTH.month_id;";*/

$result = mysqli_query($con,$sql);



echo "<table>
<tr>
<caption>Statistics Database</caption>
<th>SalesYear</th>
<th>SalesMonth</th>
<th>ProduceID</th>
<th>TotalSales</th>


</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['SalesYear'] . "</td>";
    echo "<td>" . $row['SalesMonth'] . "</td>";
    echo "<td>" . $row['ProduceID'] . "</td>";
    echo "<td>" . $row['TotalSales'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>