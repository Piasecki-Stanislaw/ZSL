<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figury geometryczne</title>
</head>
<body>
   <h4>Wybierz jedną z opcji</h4> 
   <form action="./scripts/5_2script.php" method="post">
    <input type="text" name="name" placeholder="Podaj Imię"><br><br>
    <input type="radio" name="figura" value="kwadrat" checked>Kwadrat<br><br>
    <input type="radio" name="figura" value="prostokat">Prostokąt<br><br>
   <input type="submit" value="Zatwierdź figurę"><br><br>
   </form>
<?php
?>
</body>
</html>