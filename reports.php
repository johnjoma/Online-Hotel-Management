<?php include 'conn.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> user portal</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="viewadmin.css">
    <link rel="stylesheet" href="mastercss/bootstrap.min.css">
    <link rel="stylesheet" href="mastercss/user.css">


<head>
  <center>
  <div id="navbar">
NOKRAS HOTEL ADMIN DASHBOARD
<a href="dashboard.php"><i class="fa fa-users"></i>DASHBOARD</a>
<a href="allrooms.php"><i class="fa fa-bed"></i>ADD Rooms</a>
<a href="conferenceht.php"><i class="fa fa-users"></i>Add CONFERENCE HALL</a>
<a href="viewconference.php"><i class="fa fa-users"></i>view halls</a>
<a href="viewbookies.php"><i class="fa fa-users"></i>view Bookies</a>

</div>
</center>

  </head>
  <body>

<button class="tablink" onclick="openPage('book', this, ' #0efa03 ')" id="defaultOpen">  <i class="fa fa-book" aria-hidden="true"></i>  Bookings</button>
<button class="tablink" onclick="openPage('cancel', this, '#fa1903')" ><i class="fa fa-ban" aria-hidden="true"></i>  cancelations</button>
<button class="tablink" onclick="openPage('finance', this, 'green  ')"> <i class="fa fa-money"> </i>   Financial Reports</button>
<button class="tablink" onclick="openPage('report', this, 'orange')"><i class="fa fa-flag" aria-hidden="true"></i>   Reports</button>

<script>
function printContent(el){
var restorepage = document.body.innerHTML;
var printcontent = document.getElementById(el).innerHTML;
document.body.innerHTML = printcontent;
window.print();
document.body.innerHTML = restorepage;
}
</script>
<div id="book" class="tabcontent">
    <div style="width:90%; margin:10px auto;">
  <h3>Total Bookings</h3>
   DATE:  <?php

  echo date('Y-m-d');

   ?>
   <br><br>


    <table class="table table-striped  ">

          <tr>
            <th style='width:50px;background-color: #4CAF50;'>CUSTOMER ID</th>
            <th style='width:50px;background-color: #4CAF50;'>Branch</th>
              <th style='width:150px;background-color: #4CAF50;'>Board Type</th>
              <th style='width:150px;background-color: #4CAF50;'>STATUS</th>
              <th style='width:150px;background-color: #4CAF50;'>Date</th>


          </tr>




      <?php

      $sql="SELECT customer_id,branch, boardtype,status FROM reservations";
      $result =$conn-> query($sql);

      if ($result-> num_rows > 0) {
         while ($row = $result-> fetch_assoc()){
           echo "<tr>
       			  <td>".$row["customer_id"]."</td>
       			  <td>".$row['branch']."</td>


                   <td>".$row['boardtype']."</td>
                   <td>".$row['status']."</td>




       		   	  </tr>";
         }
         echo "</table>";
      }
      else {
        echo "0 rseult";
      }
      $conn-> close();


       ?>

 </table>
</div>

  </div>
  <div class="button">
  <button onclick="printContent('book')">Print</button>
  </div>

<div id="cancel" class="tabcontent">
  <div style="width:90%; margin:10px auto;">
<h3>Total Cancellations</h3>
 DATE:  <?php

echo date('Y-m-d');

 ?>
 <br><br>


  <table class="table table-striped  ">

        <tr>
          <th style='width:50px;background-color: #4CAF50;'>CUSTOMER ID</th>
          <th style='width:50px;background-color: #4CAF50;'>Branch</th>
            <th style='width:150px;background-color: #4CAF50;'>Board Type</th>
            <th style='width:150px;background-color: #4CAF50;'>STATUS</th>



        </tr>




    <?php

    $sql="SELECT customer_id,branch, boardtype,status FROM reservations";
    $result =$conn-> query($sql);

    if ($result-> num_rows > 0) {
       while ($row = $result-> fetch_assoc()){
         echo "<tr>
            <td>".$row["customer_id"]."</td>
            <td>".$row['branch']."</td>


                 <td>".$row['boardtype']."</td>
                 <td>".$row['status']."</td>




              </tr>";
       }
       echo "</table>";
    }
    else {
      echo "0 rseult";
    }
    $conn-> close();


     ?>

</table>
</div>
</div>

<div id="finance" class="tabcontent">
  <h3>Contact</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="report" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div>



<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>



  </body>
</html>
