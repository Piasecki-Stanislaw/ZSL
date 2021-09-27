<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prostokąt</title>
</head>
<body>
    <h3>Prostokąt</h3>
    <form method="post">
    <input type="text" name="sideA"  placeholder="podaj bok A"><br><br>
    <input type="text" name="sideB"  placeholder="podaj bok B"><br><br>
    <input type="submit" value="Obicz"><br><br>
<?php
if(!empty($_POST['sideA']) && !empty($_POST['sideB'])) {
$sideA= $_POST['sideA'];
$sideB= $_POST['sideB'];
$area=$sideA*$sideB;
$circle= 2*$sideA+2*$sideB;
echo <<< RESULT
    <hr>
    Pole prostokąta wynosi: $area cm<sup>2
    <hr>
    Obwód prostokąta winosi: $circle cm
RESULT;
}
else {
    echo 'Wypełnij wszystkie pola!';
}
?>
</body>
</html>