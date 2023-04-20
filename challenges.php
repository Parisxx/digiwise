<?php
   session_start();
   require_once("database/db_connection.php");
   $pdo = connect();
 

  $stmt = $pdo->query("SELECT * FROM challenges");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digiwise | Challenges</title>
    <link rel="stylesheet" href="css/styles_challenges.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
</head>
<body>
<?php
 include 'header.php';
?>
<img class="blocks" src="images/block.png">

<?php

// Select challenges grouped by category
$sql = "SELECT category, number, content FROM challenges GROUP BY category, number ORDER BY category, number";
$stmt = $pdo->query($sql);

$current_category = null; // Add a variable to keep track of the current category
while ($data = $stmt->fetch())
{
  if ($data['category'] !== $current_category) { // Check if the category has changed
    if ($current_category !== null) { // Print the previous group of challenges (if any)
      echo "</div>"; // Close the previous group's container
    }
    echo "<h3 class='title'>" . $data['category'] . " challenges </h3>"; // Print the new category
    echo "<div class='challenges_container'>"; // Open a container for the challenges
    $current_category = $data['category']; // Update the current category
  }
  echo "<div class='card' onclick='this.classList.toggle(\"active\")'>";
  echo "<h3>Challenge " . $data['number'] . "</h3>";
  echo "<div class='card_content'>";
  echo "<p>" . $data['content'] . "</p>";
  echo "</div>";
  echo "</div>";
}

if ($current_category !== null) { // Print the last group of challenges (if any)
  echo "</div>"; // Close the last group's container
}
?>

<?php

 include 'footer.php';
?>

</body>
</html>