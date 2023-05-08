<?php
  session_start();
  require_once("database/db_connection.php");
  $pdo = connect();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digiwise | Admin inloggen</title>
    <link rel="stylesheet" href="css/styles_admin.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
<label>Gebruikersnaam:</label><br>
<input required type="text" name="username"><br>
<label>Wachtwoord:</label><br>
<input required type="password" name="password"><br>
<br>
<input name="submit" type="submit" value="Verstuur">
</form>


<?php

?>

</body>
</html>