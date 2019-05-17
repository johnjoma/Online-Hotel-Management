<?php
include 'conn.php'


 ?>

<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <title> Nokras|Hotel</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="mastercss/style.css">
  <link rel="stylesheet" href="mastercss/animate.css">
  <link rel="stylesheet" href="mastercss/availability.css">
  <link rel="stylesheet" href="mastercss/experience.css">
  <center>
  <div id="navbar">

    <a href="index.php" id="linkref"><i class="fa fa-home"></i>HOME</a>
    <a href="checkrates.php" id="linkref"><i class="fa fa-bed"></i>ROOMS</a>
    <a href="dining.html" id="linkref"><i class="fa fa-cutlery"></i>DINING&BARS</a>


   <a href="conference.html" id="linkref"><i class="fa fa-users"></i>CONFERENCE</a>
   <a href="about.php" id="linkref"><i class="fa fa-book"></i>ABOUT</a>
   <a href="experience.php" id="linkref"><i class="fa fa-smile-o"></i>EXPERIENCE</a>

TODAY'S DATE:  <?php

echo Date('Y-m-d');

 ?>






</div>
</center>
</head>

<body>

  <section class="neto">
    <div class="slideshow-container">

  <div class="mySlides fade">

    <img src="images/nokras6.jpg" class="slide" >
    <div class="text">Discover a hotel that defines a new dimension of luxury.</div>
  </div>

  <div class="mySlides fade">

    <img src="images/nokras10.jpeg" class="slide">
    <div class="text">We invite you to try it</div>
  </div>

  <div class="mySlides fade">

    <img src="images/nokras12.jpg" class="slide">
    <div class="text">Pleasing people the world over.</div>
  </div>


  <div class="mySlides fade">

    <img src="images/nokras4.jpeg" class="slide">
    <div class="text">Across the street from the ordinary</div>
  </div>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 5000); // Change image every 2 seconds
  }
  </script>
    </section>

    <div id="hotel">
      
      <div class="tooltip"><a href="muranga.php" id="linkref"><i class="fa fa-home"></i>NOKRAS HOTEL | MURANG'A</a>
        <span class="tooltiptext">Click here to view Nokras Murang'a</span>
        </div>
<style media="screen">
  .logo{
    height: 100px;
    width: 100px;
  }
</style>
<img src="images/logo.png" class="logo">
      <div class="tooltip"><a href="sagana.php" id="linkref"><i class="fa fa-home"></i>NOKRAS HOTEL | RIVERINE SAGANA</a>
        <span class="tooltiptext">Clik here to view Nokras Sagana Riverine</span>
</div>



    </div>
