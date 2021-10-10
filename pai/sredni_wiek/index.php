<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Średni wiek</title>
</head>
<body>
    <?php
    if(!isset($_POST['person']) && !isset($_POST['buttonAVG'])){
        echo <<< FORMCOUNTPERSON
        <h3>Ilość osób w rodzinie</h3>
        <form method="post">
        <input type="number" name="person" placeholder="Podaj ilość osób"><br><br>
        <input type="submit" value="Zatwierdź">
    </form>
    FORMCOUNTPERSON;
    }
?>
<?php
if(!empty($_POST['person'])) {
   echo "<h3>Ilość osób w rodzinie: $_POST[person]</h3>";
    echo $_POST['person'];
    echo '<form method="post">';

        for($i=0; $i < $_POST['person']; $i++){
            echo "<input type=\"number\" name=\"age$i\" placeholder=\"Podaj wiek osoby $i\"><br><br>";
        }
        echo '<input type="submit" name="buttonAVG" value="Oblicz średni wiek">';
echo '</form>';
    }

if (isset($_POST['buttonAVG'])){
   // print_r($_POST);
   $ageAVG=0;
   foreach($_POST as $key => $value){
       if($key != 'buttonAVG'){
        $ageAVG=$ageAVG+$value;
       }
   }
   $liczbal=count($_POST)-1;
   $srednia=$ageAVG/$liczbal;
   $srednia=number_format($srednia,2,".");
   echo "Średni wiek: $srednia";
echo "<h4><a href='index.php'>POCZĄTEK</a></h4>";
}
?>
</body>
</html>