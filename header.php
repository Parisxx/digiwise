<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <style>
      body{
        font-family: 'Nunito Sans', sans-serif;
        font-weight: bold;
      }
        header{
  background-color: transparent;
}
li{
  list-style: none;
}
a{
  color: white;
  text-decoration: none;
}
.container{
  max-width: 1224px;
  width: 90%;
  margin: 0 auto;
}
.navbar{
  min-height: 70px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 25px;
}

.navbar img{
    width: 250px;
}
.nav-branding{
  font-size: 2rem;
}
.nav-menu{
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 60px;
}
.nav-link{
  transition: 0.3s ease-out;
}
.nav-link:hover{
  color: dodgerblue;
}
.hamburger{
  display: none;
  cursor: pointer;
}
.bar{
  display: block;
  width: 25px;
  height: 3px;
  margin: 5px auto;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  background-color: white;
}
@media(max-width:1024px){
  .hamburger{
    display: block;
  }
 .hamburger.active .bar:nth-child(2){
    opacity: 0;
  }
 .hamburger.active .bar:nth-child(1){
    transform: translateY(8px) rotate(45deg);
  }
 .hamburger.active .bar:nth-child(3){
    transform: translateY(-8px) rotate(-45deg);
  }
 .nav-menu{
    position: fixed;
    left: -100%;
    top: 70px;
    gap: 0;
    flex-direction: column;
    width: 100%;
    text-align: center;
    transition: 0.3s;
    background: #54A5C4;
  }
 .nav-item{
    margin: 16px 0;
  }
 .nav-menu.active{
    left: 0;
  }

}
    </style>

    
<header>
   <div class="container"> 
      <nav class="navbar">  
        <a href="index.php"> <img src="images/digiwise.png" alt=""> </a>
         <ul class="nav-menu">
            <li class="nav-item">
               <a href="story.php" class="nav-link">Ons Verhaal</a>
            </li>
            <li class="nav-item">
               <a href="challenges.php" class="nav-link">Challenges</a>
            </li>
            <li class="nav-item">
               <a href="showcase.php" class="nav-link">Showcase</a>
            </li>
            <li class="nav-item">
               <a href="gallery.php" class="nav-link">Gallerij</a>
            </li>
            <li class="nav-item">
               <a href="contact.php" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
               <a href="news.php" class="nav-link">Nieuws</a>
            </li>
         </ul>
         <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
         </div>
        <button class="contact-btn" style="background: #2789CA; border: none; color: #FFF; padding: 1em;">Samen Werken</button>
      </nav>
  
   </div>
</header>
<script>
        const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
})
document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
  hamburger.classList.remove("active");
  navMenu.classList.remove("active");
}))
    </script>
</body>
</html>