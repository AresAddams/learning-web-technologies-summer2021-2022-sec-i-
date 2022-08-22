<?php



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/1d8d5a561b.js" crossorigin="anonymous"></script>

  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      margin: 0px;
      padding: 0px;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover:not(.active) {
      background-color: #111;
    }

    li a:hover.active {
      background-color: #111;
    }

    .right {
      float: right;
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: Verdana, sans-serif;
    }

    .mySlides {
      display: none;
    }

    img {
      vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {

      position: relative;
      margin: auto;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }
    }
  </style>
  <title>AIUB Home</title>
</head>

<body>
  <ul>
    <li><a href="index.php">American International University Bangladesh</a></li>
    <div class="right">
      <li> <a href="index.php"> <img src="../FINAL_PROJECT/asset/aiub.png" alt="">AIUB</a></li>
      <li><a href="../FINAL_PROJECT/index.php">Home</a></li>
      <li><a href="../FINAL_PROJECT/view/about.html">About</a></li>
      <li><a href="../FINAL_PROJECT/view/contact.html">Contact</a></li>
      <li><a href="../FINAL_PROJECT/view/login.php"><i class="fa-solid fa-user"></i>Login</a></li>
    </div>
  </ul>
  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 7</div>
      <img src="../FINAL_PROJECT/asset/banner1.jpg" style="width:100%">
      <div class="text">Aerial View of AIUB Campus</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 7</div>
      <img src="../FINAL_PROJECT/asset/banner2.jpg" style="width:100%">
      <div class="text">Playground, Gallery & Building - D</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 7</div>
      <img src="../FINAL_PROJECT/asset/banner3.jpg" style="width:100%">
      <div class="text">Center Garden</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">4 / 7</div>
      <img src="../FINAL_PROJECT/asset/banner4.jpg" style="width:100%">
      <div class="text">Amphitheatre</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">5 / 7</div>
      <img src="../FINAL_PROJECT/asset/banner5.jpg" style="width:100%">
      <div class="text">Green Campus</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">6 / 7</div>
      <img src="../FINAL_PROJECT/asset/banner6.jpg" style="width:100%">
      <div class="text">Entrance of Sports Gallery</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">7 / 7</div>
      <img src="../FINAL_PROJECT/asset/banner7.jpg" style="width:100%">
      <div class="text">Passage Between Annex - 2 & Annex - 3</div>
    </div>
  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 1000); // Change image every 1 seconds
    }
  </script>
</body>

</html>