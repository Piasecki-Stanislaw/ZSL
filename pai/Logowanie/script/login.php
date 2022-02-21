<?php
require_once './connect.php';
if ($email && password_verify($_POST['pass1'], $pass)) {
  echo "Pomyślnie zalogowano";
}
else {
  echo "error";
}
 ?>
