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
    <title>Digiwise | Contact</title>
    <link rel="stylesheet" href="css/styles_contact.css">
</head>
<body>
<?php
 include 'header.php';
?>

<form class="contact" action="contact.php" method="post" enctype="multipart/form-data">
  <label>Volledige naam:</label><br>
  <input required type="text" name="name"><br>

  <label>Naam organisatie:</label><br>
  <input type="text" name="organisation"><br>

  <label>Onderwerp:</label><br>
  <textarea required name="subject"></textarea><br>

  <input name="submit" type="submit" value="Verstuur">
  
</form>

<?php
if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $organisation = $_POST['organisation'];
        $subject = $_POST['subject'];
    
        $sql = "INSERT INTO contact (name, organisation, subject) VALUES ('$name', '$organisation', '$subject')";
        $result = $pdo->query($sql);
    }

?>

</body>
</html>