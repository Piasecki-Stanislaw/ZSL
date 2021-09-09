<?php
echo PHP_VERSION;
echo 2**10,"<br>";

$x=1;
$y=10;
echo $x<=>$y;
//równe /identyczne
$x=1;
$y=1.0;
echo gettype($x);
echo gettype($y);
if ($x==$y){
    echo "równe"; 
} else {
    echo "różne";
}

if ($x===$y){
    echo "identyczne"; 
} else {
    echo "różne";
}
?>