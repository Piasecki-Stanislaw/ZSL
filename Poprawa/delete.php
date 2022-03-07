<?php
if(!empty($_GET['delete'])) {
  $conn= new mysqli("localhost","root","","3pi2t");
  $sql="DELETE FROM user WHERE user.id=$_GET[delete]";
  $connect ->query($sql);
  if($connect->affected_rows){
    header("location:index.php?error=Prawidłowo usunięto rekord o id=$_GET[delete]");
  }else{
    header('location:index.php?error=Nie usunięto rekordu');
  }
 ?>
