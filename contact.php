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
 <H1>Contact</H1>
 <h4> 088 001 5000</h4>
 <h4> 06-47087078</h4>
 <h4>info@digiwise.academy</h4>

 <div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
<br>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
<br>
    <label for="subject">Subject</label>
    <br>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
<br>
    <input type="submit" value="Submit">

  </form>
</div>

 <?php
 include 'footer.php';
 ?>
</body>
</html>