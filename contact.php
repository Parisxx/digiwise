

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
  <label>Naam organisatie:</label><br>
  <input type="text" name="name"><br>
  <label>Onderwerp:</label><br>
  <textarea name="subject"></textarea><br>
  <input type="submit" value="Verstuur">
</form>


</body>
</html>