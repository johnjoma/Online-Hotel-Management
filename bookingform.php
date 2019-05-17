<?php
include 'booking.php'
 ?>
<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <title> Nokras hotel booking form</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel="stylesheet" href="mastercss/booking.css">
  <link rel="stylesheet" href="animate.css">
  <center>
  <div id="navbar">
    <a href="index.php" id="linkreff"><i class="fa fa-home"></i>HOME</a>
NOKRAS HOTEL BOOKING FORM


</div>
</center>
</head>
<body>


  <?php
  $branch=$_GET['branch'];
  $datein=$_GET['datein'];
  $dateout=$_GET['dateout'];
  $adult=$_GET['adult'];
  $children=$_GET['children'];
  $no_rooms=$_GET['no_rooms'];
  $boardtype=$_GET['boardtype'];
  $roomtype=$_GET['roomtype'];


   ?>
  <section>


  <form id="msform" action="" method="post">


<!-- progressbar -->
<ul id="progressbar">
  <li class="active">Booking Details</li>
  <li>More details</li>
  <li>Personal Details</li>
</ul>
<!-- fieldsets -->
<fieldset>
  <h2 class="fs-title">Book your stay</h2>
  <h3 class="fs-subtitle">Fill in Booking Details</h3>
  <h4>  <div class="tooltip"><a href="modifybookings.php" id="linkref"><i class="fa fa-pencil-square-o"></i>Modify booking</a>
    <span class="tooltiptext">Click here to Confirm or Cancel Booking</span>
  </div></h4>
    <input type="hidden" name="customerid" value="<?php
          echo(rand(1000,2000));

        ?>  ">
          <label for="branch"><i class="fa fa-university"></i> BRANCH</label>
          <select name="branch">
    <option value="<?php echo "$branch"; ?>"><?php echo "$branch"; ?></option>
    <option value="#">Choose hotel Branch..</option>
   <option value="muranga">Nokras Muranga</option>
   <option value="riverine">Nokras Sagana</option>

 </select>




     <label for="room"><i class="fa fa-bed"></i>BOARD</label>
            <select name="boardtype" >
            <option value="<?php echo "$boardtype"; ?>"><?php echo "$boardtype"; ?></option>
         <option value="type">choose board type</option>
         <option value="bed_breakfast">bed&Breakfast</option>
         <option value="half_board">Half board</option>
         <option value="full_board">Full board</option>

       </select>

   <label for="checkin"><i class="fa fa-calendar" aria-hidden="true"></i>
Check in date:</label>

      <input type="date" name="datein" min="<?php

     echo date('Y-m-d');

       ?>"  value="<?php echo "$datein"; ?>">


      <label for="checkout"><i class="fa fa-calendar" aria-hidden="true"></i>
Check out date:</label>
              <input type="date"  name="dateout" value="<?php echo "$dateout"; ?>" min="<?php

             echo date('Y-m-d');

               ?>">



  <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
<fieldset>
  <h2 class="fs-title">Continue Booking your Stay</h2>
  <h3 class="fs-subtitle">More booking details</h3>

          <label for="roomtype"><i class="fa fa-bed"></i>ROOM TYPE</label>
                <select name="roomtype">
               <option value="<?php echo "$roomtype"; ?>"><?php echo "$roomtype"; ?></option>
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
  <label for="room"><i class="fa fa-bed"></i>No of Rooms</label>
            <select name="no_rooms" >
          <option value="<?php echo "$no_rooms"; ?>"><?php echo "$no_rooms"; ?></option>
         <option value="type">choose no of rooms</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5+</option>
       </select>
<label for="adult"><i class="fa fa-users"></i> Adults</label>
          <select name="adult" >

      <option value="<?php echo "$adult"; ?>"><?php echo "$adult"; ?></option>
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
          <select name="children" >
             <option value="<?php echo "$children"; ?>"><?php echo "$children"; ?></option>
             <option value="no">choose no of children</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5 </option>
       <option value="6">5+ </option>

          </select>
  <input type="button" name="previous" class="previous action-button" value="Previous" />
  <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
<fieldset>
  <h2 class="fs-title">important personal details</h2>
  <h3 class="fs-subtitle">Who are you? how can we get in touch with you?</h3>
  <label for="fname"><i class="fa fa-user"></i> First Name</label>
          <input type="text" id="fname" name="fname" placeholder="first name"  required>
    <label for="lname"><i class="fa fa-user"></i> Last Name</label>
          <input type="text" id="lname" name="lname" placeholder="Last Name" >
          <label for="email"><i class="fa fa-envelope"></i> Email</label>
          <input type="email" id="email" name="email" placeholder="john@example.com" required>
          <label for="adr"><i class="fa fa-mobile"></i> Contact</label>
          <input type="number" id="adr" name="contact"  placeholder="+" required>
  <input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="submit"  name="booknow" value="Book Now" class="btnsubmit">
  <input type="reset" name="Reset" value="Reset" class="reset reset-button">
<br><br>
<a href="receipt.php" id="linkref"><i class="fa fa-file-text"></i>check receipt</a>
</fieldset>

</form>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>



  <script  src="js/index.js"></script>
</section>
<style media="screen">
.details{

  position: absolute;
  top:200px;
  margin-left: 80%;
}
.confirmbtn{

  width: auto;
  margin-left: 5%;
  height:auto;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;

}
.put{

  width: 50%;

  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

</style>
<form class="details" action="receipt.php" method="post">
  <p>Check your Details here</p>
  <input type="text" placeholder="Enter your code here..." name="code"  class="put"required>

    <button type="submit" name="receipt" class="confirmbtn">check details</button>

</form>
</body>

<footer>


</footer>
</html>
