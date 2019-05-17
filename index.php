<?php include 'header.php' ?>


  <form class="availability" action="rooms.php">
    <div class="container">
      <label for="branch"><b>Select hotel:</b></label>
      <select name="branch" required>
                           <option value="branch" required>Choose hotel Branch</option>
                           <option value="muranga">NOKRAS MURANGA</option>
                           <option value="riverine">NOKRAS RIVERINE SAGANA</option>

                         </select>

      <label for="checkin"><b>Check in:</b></label>
        <input type="date"name="datein"  class="check-in" required min="<?php

       echo date('Y-m-d');

         ?>">

      <label for="checkout"><b>Check out </b></label>

	  <input type="date" name="dateout"class="check-out" required min="<?php

   echo date('Y-m-d');

     ?>">



     <label for="room"><i class="fa fa-bed"></i>BOARD</label>
            <select name="boardtype" required>
         <option value="type">choose board</option>
         <option value="bed_breakfast">bed&Breakfast</option>
         <option value="half_board">Half board</option>
         <option value="full_board">Full board</option>

       </select>

     <label for="room"><i class="fa fa-bed"></i>No of Rooms</label>
            <select name="no_rooms" required>
         <option value="type">choose no of rooms</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5+</option>
       </select>

       <label for="roomtype"><i class="fa fa-bed"></i>ROOM TYPE</label>
             <select name="roomtype">

           <option value="A">choose room type..</option>
        <option value="standard">Standard Single</option>
        <option value="Dstandard">Standard Double</option>
        <option value="duluxe">Duluxe single</option>
        <option value="Dduluxe">Duluxe Double</option>
        <option value="executive"> Executive Single</option>
        <option value="Dexecutive"> Executive Double</option>
        <option value="luxurious">Luxurious single</option>
        <option value="Dluxurious">Luxurious Double</option>
        <option value="cottage">Cottage Single</option>
        <option value="Dcottage">Cottage Double</option>
        <option value="vip">Vip</option>

      </select>



   <label for="adult"><i class="fa fa-users"></i> Adults</label>
          <select name="adult" required>
       <option value="no">choose no of Adults</option>
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5 </option>
       <option value="6"> 6</option>
       <option value="7">7</option>
       <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>
    <label for="children"><i class="fa fa-child"></i> Children</label>
          <select name="children">
             <option value="no">choose no of children</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5 </option>
       <option value="6">5+ </option>

          </select>

      <div class="clearfix">

        <a href="modifybookings.php" id="linkref"><i class="fa fa-pencil-square-o"></i>Modify booking</a>

        <button type="submit" name="submit"class="checkbtn">Check Rates</button>

      </div>
    </div>
  </form>
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
Its spacious bathroom has a Jacuzzi with a separate shower with glass enclosures.</p>
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
        <p>Exclusive</p>
        <a href="experience.php" id="linkreff"><i class="fa fa-bed"></i>DISCOVER</a>
      </div>
    </div>

    <div class="column2 food">
      <div class="content2">
        <img src="foods/nokrasfood2.jpg" alt="food" style="width:100%">
        <h4>food</h4>
        <p>Exclusive</p>
        <a href="experience.php" id="linkreff"><i class="fa fa-bed"></i>DISCOVER</a>
      </div>
    </div>

    <div class="row2">
      <div class="column2 food">
        <div class="content2 animated fadeInUp">
          <img src="foods/nyamachoma.jpg" alt="room" style="width:100%">
          <h4>nyama choma</h4>
          <p></p>
          <a href="experience.php" id="linkreff"><i class="fa fa-bed"></i>DISCOVER</a>
        </div>
      </div>


          <div class="column2 food">
            <div class="content2 animated fadeInUp">
              <img src="images/yoga1.jpg" alt="food" style="width:100%">
              <h4>Yoga</h4>
              <p></p>
              <a href="experience.php" id="linkreff"><i class="fa fa-bed"></i>DISCOVER</a>
            </div>
          </div>

          <div class="column2 food">
            <div class="content2">
              <img src="images/gym1.jpg" alt="food" style="width:100%">
              <h4>Gym</h4>
              <p></p>
              <a href="experience.php" id="linkreff"><i class="fa fa-bed"></i>DISCOVER</a>
            </div>
          </div>

          <div class="column2 food">
            <div class="content2">
              <img src="images/fun1.jpg" alt="food" style="width:100%">
              <h4>Toto funnies</h4>
              <p></p>
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
  <?php include 'footer.php' ?>
  <div class="footer">
<form class="talk" action="index.php" method="post">
  <h6>Talk to us</h6>
  <div class="footercontent">


  <label for="email">Email:</label>
  <input type="text" name="email" placeholder="Your email.....">
  <label for="text">Write your Message</label>
  	<textarea name="text" rows="4" cols="40" placeholder="Type your message here ........"></textarea>
    <input type="submit" name="submit" value="send message" class="btnfooter">
    </div>
</div>
</form>

</footer>

</body>
</html>
