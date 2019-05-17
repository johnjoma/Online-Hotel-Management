<?php
include 'conn.php';

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nokras | Hotel|viewrooms</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="viewadmin.css">

    <center>
    <div id="navbar">
  NOKRAS HOTEL ADMIN DASHBOARD
  <a href="dashboard.php"><i class="fa fa-users"></i>DASHBOARD</a>


  </div>
  </center>
  </head>
  <body>

  <table>
    <tr>
      <th>message_id</th>
      <th>email</th>
      <th>message</th>


  </tr>



<?php

$sql="SELECT message_id,email,message from messages";
$result =$conn-> query($sql);

if ($result-> num_rows > 0) {
   while ($row = $result-> fetch_assoc()){
     echo "<tr><td>".$row["message_id"] ."</td><td>"
     .$row["email"] ."</td><td>" .$row["message"] ."</td><td>"."</td></tr>";
   }
   echo "</table>";
}
else {
  echo "0 rseult";
}
$conn-> close();


 ?>

</table>




  </body>
</html>
