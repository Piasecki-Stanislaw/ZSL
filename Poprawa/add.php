<?php
if(!empty($_POST)){
  foreach ($_POST as $key => $value) {
    if(empty($value)){
    header('location: index.php?error=Wypelnij wszystkie pola!&add=');
    exit();
    }
  }
    $conn= new mysqli("localhost","root","","3pi2t");
    $sql="INSERT INTO `zsl` (`id`, `cityid`, `name`, `surname`, `birthday`, `create_date`) VALUES (NULL, '$_POST[cityid]', '$_POST[name]', '$_POST[surname]', '$_POST[birthday]', current_timestamp());";
    $connect->query($sql);
if($connect->affected_rows){
    header('location: index.php?error=dodano uzytkownika');
}else {
    header('location: index.php?error=nie dodano uzytkownika');
}

}
?>
