<?php
   session_start();
   require_once("database/db_connection.php");
   $pdo = connect();
 

  $stmt = $pdo->query("SELECT * FROM gallery");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digiwise | Gallerij</title>
    <link rel="stylesheet" href="css/styles_gallery.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
</head>
<body>
<?php
 include 'header.php';
?>
<img class="blocks" src="images/block.png">


<div class="div_images">
<?php
  while ($data = $stmt->fetch())
  {
    echo '<img class="image" src="images/' . $data['photo'] . '">';
  }

?>
</div>

<?php
 include 'footer.php';
?>
</body>
</html>