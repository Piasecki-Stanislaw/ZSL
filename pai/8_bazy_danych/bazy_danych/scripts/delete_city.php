<?php
if (!empy($_GET['deleteUser'])){
  require_once './connect.php';
  $sql="DELETE FROM `cities` WHERE `cities`.`city_id` = $_GET[deleteCity]";
  $connect->query($sql)
}
else{
    header('location: ../cities.php');
}
 ?>
 ?>
