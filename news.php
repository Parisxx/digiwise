<?php
   session_start();
   require_once("database/db_connection.php");
   $pdo = connect();
 

  $stmt = $pdo->query("SELECT * FROM news");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digiwise | Nieuws</title>
    <link rel="stylesheet" href="css/styles_news.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
</head>
<body>
<?php
 include 'header.php';
?>
<img class="blocks" src="images/block.png">

<?php
while ($data = $stmt->fetch())
{
echo "<div class='news'>";
echo "<h2>". $data['title'] ."</h2>";
echo "<h3>". $data['date'] ." </h3>";
echo "<p>". $data['text'] ."</p>";
echo "</div>";
}
?>
<?php
 include 'footer.php';
?>

</body>
</html>