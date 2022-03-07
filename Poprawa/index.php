<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>
<?php
$conn= new mysqli("localhost","root","","3pi2t");
$sql= "SELECT * FROM `users`";
$result= $connect->query($sql);
if (isset($_GET['error'])) {
  echo $_GET['error'];
}
echo <<< TABLE
<table>
  <tr>
    <th>ID</th>
    <th>imię</th>
    <th>nazwisko</th>
    <th>data urodzenia</th>
    <th>data dodania użytkownika</th>
  </tr>
TABLE;
while ($user = $result->fetch_assoc()) {
  echo <<< USER
  <tr>
    <td>$user[ID]</td>
    <td>$user[name]</td>
    <td>$user[surname]</td>
    <td>$user[birthday]</td>
    <td>$user[create_date]</td>
    <td><a href="delete.php?delete=$user[ID]">usuń</a></td>
  </tr>
  USER;
}
  echo "</table>";
if (isset($_GET['add'])) {
  echo <<< FORMADDUSER
  <h4>Dodawanie użytkownika</h4>
  <form action="add.php" method="post">
  <input type="text" name="name" placeholder="Podaj imię">
  <input type="text" name="surname" placeholder="Podaj nazwisko">
  <input type="date" name="birthday" placeholder="Podaj datę urodzenia">
  <input type="submit" value="Dodaj użytkownika">
  </form>
  FORMADDUSER;
}else {
  echo '<br><a href="add.php?add=">Dodaj użytkownika</a>';
}
?>

</body>
</html>
