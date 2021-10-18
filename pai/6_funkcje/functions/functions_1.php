<?php
function text(){
  echo 'test';
}

function name($name){
  return $name;
}

function validateString($string, $lenght){
 return substr(ucfirst(strtolower(trim($string))), 0, $lenght);
}
 ?>
