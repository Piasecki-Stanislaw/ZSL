<?php
if(!empty($_POST)){
  foreach ($_POST as $key => $value) {
    if(empty($value)){
    header('location: index.php?error=Wypelnij wszystkie pola!&add=');
    exit();
    }
  }
    $conn= new mysqli("localhost","root","","3pi2t");
    $sql="INSERT INTO `zsl` (`id`,  `name`, `surname`, `birthday`) VALUES (NULL, '$_POST[name]', '$_POST[surname]', '$_POST[birthday]');";
    $result=$conn->query($sql);
if($result->affected_rows){
    header('location: index.php?error=dodano uzytkownika');
}else {
    header('location: index.php?error=nie dodano uzytkownika');
}

}
?>
