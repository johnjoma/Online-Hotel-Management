<?php include 'conn.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>search results</title>
    <link rel="stylesheet" href="mastercss/bootstrap.min.css">

  </head>
  <body>
     <a href="viewbookies.php"> back</a>

    <br><br><br>
    <div style="width:90%; margin:10px auto;">

    <table class="table table-striped  ">
        <tr>
          <tr>
          <th style='width:50px;background-color: #4CAF50;'>CUSTOMER_ID</th>
          <th style='width:50px;background-color: #4CAF50;'>Branch</th>
          <th style='width:150px;background-color: #4CAF50;'>Email</th>
          <th style='width:50px;background-color: #4CAF50;'>Contact</th>
          <th style='width:150px;background-color: #4CAF50;'>Room Type</th>
            <th style='width:150px;background-color: #4CAF50;'>Board Type</th>
          <th style='width:150px;background-color: #4CAF50;'>No of rooms</th>
          <th style='width:50px;background-color: #4CAF50;'>Adult</th>
          <th style='width:50px;background-color: #4CAF50;'>Children</th>
          <th style='width:450px;background-color: #4CAF50;'>Check in Date</th>
          <th style='width:450px;background-color: #4CAF50;'>Check out date</th>



          </tr>

      </tr>



    <?php

if (isset($_POST['submit'])) {
  $search=$_POST['search'];
  $startdate=$_POST['startdate'];
  $enddate=$_POST['enddate'];

    $sql="SELECT * FROM reservations WHERE datein BETWEEN '$startdate' AND '$enddate' ORDER BY datein ";
    $result =$conn-> query($sql);

    if ($result-> num_rows > 0) {
       while ($row = $result-> fetch_assoc()){
         echo "<tr>
             <td>".$row["customer_id"]."</td>
             <td>".$row['branch']."</td>
                <td>".$row['email']."</td>
                <td>".$row['contact']."</td>
                <td>".$row['roomtype']."</td>
                  <td>".$row['boardtype']."</td>
                <td>".$row['no_rooms']."</td>
                <td>".$row['adult']."</td>
                <td>".$row['children']."</td>
                <td>".$row['datein']."</td>
                <td>".$row['dateout']."</td>

               </tr>";
       }

        exit();
    }
    if (isset($_POST['submit'])) {
      $search= $_POST['search'];


      $sql="SELECT * FROM reservations WHERE customer_id LIKE '%$search%' ";

      $result=mysqli_query($conn,$sql);
      $queryResult=mysqli_num_rows($result);
      echo "<div class='result'>";
      echo "There are " .$queryResult. " result(s) Found!";
       echo "</div>";

         if ($queryResult > 0) {
        while ($row = mysqli_fetch_array($result)) {

          echo "<tr>
              <td>".$row["customer_id"]."</td>
              <td>".$row['branch']."</td>
                 <td>".$row['email']."</td>
                 <td>".$row['contact']."</td>
                 <td>".$row['roomtype']."</td>
                   <td>".$row['boardtype']."</td>
                 <td>".$row['no_rooms']."</td>
                 <td>".$row['adult']."</td>
                 <td>".$row['children']."</td>
                 <td>".$row['datein']."</td>
                 <td>".$row['dateout']."</td>

                </tr>";

        }
         echo "</table>";
      } else {
     echo "Sorry!....there are no results matching your search!";


      }
    }
  }


    $conn-> close();


     ?>



</div>


    </table>



  </body>
</html>
