<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nokras Hotels | Bookings Reports</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="animate.css">
      <link rel="stylesheet" href="mastercss/style.css">
    <link rel="stylesheet" href="mastercss/bootstrap.min.css">



<head>
  <center>
  <div id="navbar">

    <a href="index.php" id="linkref"><i class="fa fa-home"></i>HOME</a>
    <a href="checkrates.php" id="linkref"><i class="fa fa-bed"></i>ROOMS</a>
      <a href="dining.html" id="linkref"><i class="fa fa-cutlery"></i>DINING&BARS</a>

   <a href="conference.html" id="linkref"><i class="fa fa-users"></i>CONFERENCE</a>
   <a href="about.html" id="linkref"><i class="fa fa-book"></i>ABOUT</a>


</div>
</center>

  </head>

  <body>
<a href="modifybookings.php">back</a>


    <script>
  function printContent(el){
  	var restorepage = document.body.innerHTML;
  	var printcontent = document.getElementById(el).innerHTML;
  	document.body.innerHTML = printcontent;
  	window.print();
  	document.body.innerHTML = restorepage;
  }
  </script>
  <style media="screen">
  input[type=text]{

    width: 20%;
    top:30px;
    margin-left: 30%;
  }
  input[type=submit]{

    width: 5%;
    margin-left: 5%;
    height:auto;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;


  }
  img{
    margin-left: 46%;
    margin-top:0px;
    margin-bottom:0px;
    position: relative;

  }
  .date{

    margin-left: 10%;
    position: relative;
  }
  h3{

    text-align: center;
    font-weight:bolder;
    font-family:sans-serif;
    font-style: oblique;
    font-size: 30px;
  }
  .print{

    margin-left: 80%;
    position: absolute;
    top:120px;

  }
  button{
    height:auto;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;

  }
  </style>
  <br><br>

        <div id="booking"style="width:90%; margin:10px auto;">
      <h3>Your details</h3>

      <img src="images/logo.png" style="width:100px; height:100px;">
      <div class="date">


       DATE:  <?php

      echo date('Y-m-d');

       ?>
         </div>
       <br><br>


        <table class="table table-striped  ">

              <tr>
                <th style='width:50px;background-color: #4CAF50;'>CUSTOMER ID</th>
                <th style='width:50px;background-color: #4CAF50;'>Branch</th>
                <th style='width:150px;background-color: #4CAF50;'>Room Type</th>
                  <th style='width:150px;background-color: #4CAF50;'>Board Type</th>
                  <th style='width:100px;background-color: #4CAF50;'>STATUS</th>



              </tr>




          <?php
          if (isset($_POST['receipt'])) {
            $code=$_POST['code'];


          $sql="SELECT customer_id,branch,roomtype, boardtype,status FROM reservations WHERE customer_id='$code' ";
          $result =$conn-> query($sql);

          if ($result-> num_rows > 0) {
             while ($row = $result-> fetch_assoc()){
               echo "<tr>
           			  <td>".$row["customer_id"]."</td>
           			  <td>".$row['branch']."</td>
                  <td>".$row['roomtype']."</td>
                       <td>".$row['boardtype']."</td>
                       <td>".$row['status']."</td>





           		   	  </tr>";
             }
             echo "</table>";
          }
          else {
            echo "0 rseult";
          }
        }
          $conn-> close();


           ?>

     </table>
     <center>
      <p><strong>NOKRAS HOTELS &copy copyright 2018</strong></p>
   </center>
</div>

<div class="print">
<button onclick="printContent('booking')">Print</button>

  </body>
</html>
