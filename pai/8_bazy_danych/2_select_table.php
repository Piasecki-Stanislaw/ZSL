<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Użytkowincy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      $connect = new mysqli("localhost", "root", "", "3pi2t");
      $sql = "SELECT * FROM `users`";
      $result = $connect->query($sql);
        echo <<< TABLE
        <table>
          <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
            <th>Data utworzenia konta</th>
          </tr>

TABLE;
    while($user = $result->fetch_assoc()) {
        echo <<< USER
        <tr>
        <td>$user[id]</td>
        <td>$user[name]</td>
        <td>$user[surname]</td>
        <td>$user[date]</td>
        <td>$user[create_date]</td>
        </tr>
USER;

      }
echo "</table>"

     ?>

  </body>
</html>
