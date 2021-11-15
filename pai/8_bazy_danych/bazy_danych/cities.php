<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
    table, td, th{
border: solid 1px grey;
border-collapse: collapse;
padding: 8px;
text-align: center;
}
    </style>
    <title>Miasta</title>
  </head>
  <h4>Miasta</h4>
  <body>
<?php
$connect = new mysqli("localhost", "root", "", "3pi2t");
$sql = "SELECT * FROM `cities`";
$result = $connect->query($sql);
if (isset($_GET['error'])){
  echo $_GET['error'];
}
echo <<< TABLE
<table>
  <tr>
    <th>Id</th>
    <th>Miasto</th>
  </tr>
TABLE;

while($city = $result->fetch_assoc()) {
    echo <<< CITY
    <tr>
    <td>$city[city_id]</td>
    <td>$city[city]</td>
    <td><a href="./scripts/delete_city.php?deleteCity=$city[city_id]">Usuń<a></td>
    </tr>
CITY;

  }
echo "</table>"
 ?>
  </body>
</html>
