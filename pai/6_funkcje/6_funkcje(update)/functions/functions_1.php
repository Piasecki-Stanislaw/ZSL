<?php
function show(){
  echo "FUNCJA SHOW<br>";
}

function show1(){
  return "FUNCJA SHOW1<br>";
}
function nationality($nationality){
  return $nationality;
}

function validateName($name, $len, $color){
 return substr(ucfirst(strtolower(trim($name))), 0, $len);
}

 ?>
