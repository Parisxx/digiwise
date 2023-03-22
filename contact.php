<?php
  session_start();
  require_once("database/db_connection.php");
  $pdo = connect();
 

  $stmt = $pdo->query("INSERT INTO contact (name, organisation, subject)
  VALUES ('name', 'organisation', 'subject')");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digiwise | Contact</title>
    <link rel="stylesheet" href="css/styles_contact.css">
</head>
<body>
<?php
 include 'header.php';
?>

<form class="contact" action="contact.php" method="get">
  <label>Volledige naam:</label><br>
  <input required type="text" name="name"><br>

  <label>Naam organisatie:</label><br>
  <input type="text" name="organisation"><br>

  <label>Onderwerp:</label><br>
  <textarea required name="subject"></textarea><br>

  <input name="submit" type="submit" value="Verstuur">
  
</form>


</body>
</html>