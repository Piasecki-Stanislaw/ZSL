<?php
echo 'ZSŁ<br>';
echo 'ZSŁ<hr>';

$name="Janusz";
echo "$name";
echo "Janusz"." Kowalski";
//typy danych
//całkowity
$calkowita=10;
$bin=0b101;
$oct=011;
$hex=0x11;
echo $hex;
//zmiennoprzecinkowy
$x=10.5;
//logiczny
$prawda=true;
$fałsz=false; //w nazwach zmiennych nie należy używać polskich znaków

//składnia heredoc
echo <<< E
    <hr>Twoje imię: $name<br>
    Poznań<br>
    ZSŁ<hr>
E;
$text = echo <<< E
    <hr>Twoje imię: $name<br>
    Poznań<br>
    ZSŁ<hr>
E;
echo $text;
//składnia nowdoc
echo <<< 'E'
    <hr>Twoje imię: $name<br>
    Poznań<br>
    ZSŁ<hr>
E;

$surname="Nowak";
echo "\$name $surname"; //$name Nowak
?>