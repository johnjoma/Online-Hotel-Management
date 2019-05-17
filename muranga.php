

<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <title> Nokras|Hotel</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="stylesheet" href="mastercss/animate.css">
  <link rel="stylesheet" href="mastercss/branch.css">
  <link rel="stylesheet" href="mastercss/experience.css">
  <center>
  <div id="navbar">

    <a href="index.php" id="linkref"><i class="fa fa-home"></i>HOME</a>
    <a href="rooms.php" id="linkref"><i class="fa fa-bed"></i>ROOMS</a>
    <a href="dining.html" id="linkref"><i class="fa fa-cutlery"></i>DINING&BARS</a>

   <a href="conference.html" id="linkref"><i class="fa fa-users"></i>CONFERENCE</a>
   <a href="aboutmuranga.php" id="linkref"><i class="fa fa-book"></i>ABOUT</a>
   <a href="experience.php" id="linkref"><i class="fa fa-smile-o"></i>EXPERIENCE</a>




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


  <section class="neto1 animated rubberband" >

   <p>  <strong>WELCOME </strong> </br> To </br> Nokras Hotel<br> Nokras Murang'a
     | Nokra Sagana Riverine</br>
     Two unique Destinations ********* same Quality Hospitality</p>
  </section>
  <!-- MAIN (Center website) -->
  <div class="main2">
<center>
  <h1>SERVICES</h1>
  <hr>

  <h2> <italic>offered</italic></h2>
</center>



  <!-- Portfolio Gallery Grid -->

    <div class="column2 room">
      <div class="content2 animated fadeInUp">
        <img src="roomimages/nokras5.jpg" alt="room" style="width:100%">
        <h4>Room</h4>
        <p>Enjoy the luxury of our spacious Executive suites that features a sitting area with modern furniture, a workstation area, equipped with refrigerator, complimentary WiFi, a flat screen TV and a tea/coffee tray.
</p>
        <a href="bookingform.php" id="linkreff"><i class="fa fa-bed"></i>BOOK NOW</a>


      </div>
    </div>

    <div class="column2 room">
      <div class="content2 animated fadeInUp">
        <img src="roomimages/nokras9.jpg" alt="room" style="width:100%">
        <h4>Room</h4>
        <p> Our one and only VIP Suite is furnished with a King size bed,sitting area with sophisticated leather seats, a comfortable workstation,complimentary WiFi, refrigerator, a flat screen TV and a tea/coffee tray.
Its spacious bathroom has a Jacuzzi with a separate shower with glass enclosures, fluffy towels and lavish bath amenities.</p>
        <a href="bookingform.php" id="linkreff"><i class="fa fa-bed"></i>BOOK NOW</a>
      </div>
    </div>

    <div class="column2 room">
      <div class="content2 animated fadeInUp">
        <img src="roomimages/nokras10.jpg" alt="food" style="width:100%">
        <h4>Room</h4>
        <p>Enjoy the luxury of our spacious Luxurious suites that features a sitting area with modern furniture, a workstation area, equipped with refrigerator,
           complimentary WiFi, a flat screen TV and a tea/coffee tray.</p>
        <a href="bookingform.php" id="linkreff"><i class="fa fa-bed"></i>BOOK NOW</a>
      </div>
    </div>



    <div class="column2 food">
      <div class="content2">
        <img src="foods/nokrasfood1.jpg" alt="food" style="width:100%">
        <h4>food</h4>
        <p>Lorem ipsum dolor..</p>
        <a href="experience.php" id="linkreff"><i class="fa fa-bed"></i>DISCOVER</a>
      </div>
    </div>

    <div class="column2 food">
      <div class="content2">
        <img src="foods/nokrasfood2.jpg" alt="food" style="width:100%">
        <h4>food</h4>
        <p>Lorem ipsum dolor..</p>
        <a href="experience.php" id="linkreff"><i class="fa fa-bed"></i>DISCOVER</a>
      </div>
    </div>

    <div class="row2">
      <div class="column2 food">
        <div class="content2 animated fadeInUp">
          <img src="foods/nyamachoma.jpg" alt="room" style="width:100%">
          <h4>nyama choma</h4>
          <p>Lorem ipsum dolor..</p>
          <a href="experience.php" id="linkreff"><i class="fa fa-bed"></i>DISCOVER</a>
        </div>
      </div>


          <div class="column2 food">
            <div class="content2 animated fadeInUp">
              <img src="images/yoga1.jpg" alt="food" style="width:100%">
              <h4>Yoga</h4>
              <p>Lorem ipsum dolor..</p>
              <a href="experience.php" id="linkreff"><i class="fa fa-bed"></i>DISCOVER</a>
            </div>
          </div>

          <div class="column2 food">
            <div class="content2">
              <img src="images/gym1.jpg" alt="food" style="width:100%">
              <h4>Gym</h4>
              <p>Lorem ipsum dolor..</p>
              <a href="experience.php" id="linkreff"><i class="fa fa-bed"></i>DISCOVER</a>
            </div>
          </div>

          <div class="column2 food">
            <div class="content2">
              <img src="images/fun1.jpg" alt="food" style="width:100%">
              <h4>Toto funnies</h4>
              <p>Lorem ipsum dolor..</p>
              <a href="experience.php" id="linkreff"><i class="fa fa-bed"></i>DISCOVER</a>
            </div>
          </div>


  <!-- END GRID -->
  </div>

<!-- END OF MAIN -->

  </div>

  <script>
  filterSelection("all")
  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column2");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }

  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
  }

  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);
      }
    }
    element.className = arr1.join(" ");
  }



  </script>



<footer>


</footer>

</body>
</html>
