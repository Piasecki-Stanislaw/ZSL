<?php
  require_once "../functions/functions_1.php";
  show();
  echo "<hr>";
  if (!empty($_POST['name']) && !empty($_POST['color']) && !empty($_POST['nationality'])) {
    echo "Imię bez poprawy: ".($_POST['name']).", długość: ".strlen($_POST['name'])."<br>";
    $color=$_POST['color'];
    echo "<div style=\"color: $color\">";
    echo "Imię po poprawie: ".validateName($_POST['name'], 4, $_POST['color']).", długość:
    ".strlen(validateName($_POST['name'], 4, $_POST['color']))."</div><br>";
    echo "Narodowość: ".nationality($_POST['nationality']);
}
 ?>
