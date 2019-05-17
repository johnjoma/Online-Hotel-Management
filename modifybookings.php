<?php
include 'confirm.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="mastercss/modifybooking.css">

<center>
<div id="navbar">

  <a href="index.php" id="linkref"><i class="fa fa-home"></i>HOME</a>
  <a href="checkrates.php" id="linkref"><i class="fa fa-bed"></i>ROOMS</a>
  <a href="dining.html" id="linkref"><i class="fa fa-cutlery"></i>DINING&BARS</a>

 <a href="conference.html" id="linkref"><i class="fa fa-users"></i>CONFERENCE</a>
 <a href="about.html" id="linkref"><i class="fa fa-book"></i>ABOUT</a>
 <a href="experience.php" id="linkref"><i class="fa fa-smile-o"></i>EXPERIENCE</a>

TODAY'S DATE:  <?php echo Date('Y-m-d');?>

</div>
</center>

</head>
<body>
  <br><br><br>
<div id="container">

  <div id="main">
    <br><br><br>
    <div class="conditions">

<h1>Terms & Conditions on Confirmation of Booking</h1>
<hr>
<p>Confirmations: Confirmations that are received by email or fax will be processed and confirmed by our reservation office within 24 hours.<strong>ONLY</strong> Confirmations done via site are immediately reflected.
   A reservation is considered provisional until the hotel confirms acceptance of the reservation.
   We confirm the reservation by email or by entering the code given in <strong>Check Details</strong>form in this page, stating the reservation details.</p>
   <hr>
  <h1>Terms & Conditions on CANCELLATION of Booking</h1>
  <li>Cancellation of and/or amendments to your reservation must be made<strong> 48 hours  </strong>prior to your arrival date.</li>
  <li> Cancellation or amendment made within 48 hours of arrival will incur a <strong>cancellation fee of half price of one night's room charge</strong>. </li>
  <hr>

</div>
  <br><br><br>


<div class="confirm">

  <form method="POST" action="modifybookings.php">

      <h2>CONFRIM OR CANCEL BOOKING</h2>
      <label for="code"><b>Enter CODE:</b></label>
      <input type="text" placeholder="Enter your code here..." name="code" required>
      <br><br>

      <button type="submit" name="confirm" class="confirmbtn">Confirm booking</button>

      <button type="submit" name="cancel" class="cancelbtn">cancel booking</button>


  </form>

  </div>

  <style media="screen">
  .details{

    position: absolute;
    top:400px;
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
</div>
</div>
<footer id="footer">




</footer>
</body>


</html>
