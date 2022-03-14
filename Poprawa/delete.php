<?php
if(!empty($_GET['delete'])) {
  $conn= new mysqli("localhost","root","","3pi2t");
  $sql="DELETE FROM zsl WHERE zsl.id=$_GET[delete]";
  $result= $conn ->query($sql);
  if($result->affected_rows){
    header("location:index.php?error=Prawidłowo usunięto rekord o id $_GET[delete]");
  }else{
    header('location:index.php?error=Nie usunięto rekordu');
  }
}
 ?>
