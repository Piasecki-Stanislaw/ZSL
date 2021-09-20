<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularze</title>
</head>
<body>
<h3>Dane użytkownika</h3>
    <form>
        <input type="text" name="name" placeholder="Podaj imię"><br><br>
        <input type="text" name="nation" placeholder="Podaj narodowość"><br><br>
        <input type="number" name="wiek" placeholder="Podaj wiek"><br><br>
        <input type="submit" value="Zarwierdź dane"><br><br>
    </form>
    <?php
    $name= ucfirst(strtoupper($_GET['name']));
    $nation= ucfirst(strtoupper($_GET['nation']));
    $wiek= ucfirst(strtoupper($_GET['wiek']));
    if(!empty($name) && !empty($nation) && !empty($wiek)) {
        echo <<< E
            Imię: $name<br>
            Narodowość: $nation<br>
            Wiek: $wiek lat/a<br>
    E;
    }
    else{
        echo "Wypełnij wszystkie pola!";
    }
    ?>
</body>
</html>