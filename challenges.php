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
<div class="columns">
<div class="one">
<h3 class="title"> HTML challenges </h3>
<div class="card" onclick="this.classList.toggle('active')">
    <h3>Challenge 1</h3>
    <div class="card_content">
        <p>Maak met HTML een website over jezelf.</p>
    </div>
</div>

<div class="card" onclick="this.classList.toggle('active')">
    <h3>Challenge 2</h3>
    <div class="card_content">
        <p>Maak met HTML een website over je portofolie.</p>
    </div>
</div>
</div>

<div class="two">
<h3 class="title"> PHP challenges </h3>
<div class="card" onclick="this.classList.toggle('active')">
    <h3>Challenge 1</h3>
    <div class="card_content">
        <p>Maak met PHP en HTML een website over een kantine</p>
    </div>
</div>

<div class="card" onclick="this.classList.toggle('active')">
    <h3>Challenge 2</h3>
    <div class="card_content">
        <p>Maak met PHP een website over een pokedex.</p>
    </div>
</div>
</div>

<div class="three">
<h3 class="title"> Python challenges </h3>
<div class="card" onclick="this.classList.toggle('active')">
    <h3>Challenge 1</h3>
    <div class="card_content">
        <p>Maak met Python een spel over ... .</p>
    </div>
</div>

<div class="card" onclick="this.classList.toggle('active')">
    <h3>Challenge 2</h3>
    <div class="card_content">
        <p>Maak met Python een spel over ... .</p>
    </div>
</div>
</div>


</div>

<?php
 include 'footer.php';
?>
</body>
</html>