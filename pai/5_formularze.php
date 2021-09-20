<!DOCTYPE html>
<html lang="pl" dir="ltr">
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
        <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
        <input type="color" name="color" placeholder="Podaj ulubiony kolor"><br><br>
        <input type="submit" value="Zarwierdź dane"><br><br>
    </form>
    <?php
    if(!empty($_GET['name']) && !empty($_GET['surname']) && !empty($_GET['color'])) {
        echo <<< E
            Imię i nazwisko: $_GET[name] $_GET[surname]
            Ulubiony kolor: $_GET[color]
    E;
    }
    else{
        echo "Wypełnij wszystkie pola!";
    }
    ?>
</body>
</html>