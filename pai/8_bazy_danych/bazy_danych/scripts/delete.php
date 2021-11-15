<?php
if (!empy($_GET['deleteUser'])){
  require_once './connect.php';
  $sql="DELETE FROM `users` WHERE `user`.`id` = $_GET[deleteUser]";
  $connect->query($sql)
  if($connect->affected_rows){
    header('location: ../3_db_select.php?error=Prawidłowo usunięto rekord o id=$_GET[deleteUser]');
  }
  else {
    header("location: ../3_db_select.php?error=Nie usunięto rekordu!");
  }
}
else{
    header('location: ../3_db_select.php');
}
 ?>
