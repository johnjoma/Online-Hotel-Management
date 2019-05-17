<div id="btnContainer">
<button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button>
<button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
</div>
<br>

<?php
    include 'roomsheader.php'
 ?>
 <h1>Search Result</h1>
 <div class="row" >
   <?php

   if (isset($_POST['submit-search'])) {
     $search=$_POST['search'];
     $startprice=$_POST['startprice'];
     $endprice=$_POST['endprice'];

       $sql="SELECT * FROM rooms WHERE amount BETWEEN '$startprice' AND '$endprice' ORDER BY amount ";
       $result =$conn-> query($sql);

       if ($result-> num_rows > 0) {
          while ($row = $result-> fetch_assoc()){

                                           echo "<div class='column' style='background-color:#ddd;'>";
                                        echo "<img src='roomimages/".$row['image']."'>";

                                        echo "</br>"."<h>"."NOKRAS: ".$row['branch'] ."</h> ";
                                        echo "<p>"."ROOM TYPE:".$row['roomtype'] ."</br>"."FEE: ".$row['amount']
                                        ."</br>"."Description: ".$row['description']."</p> ";

                          echo "<button><a href='index.php'>book now</a></button>";

                             echo "</div>";
          }

           exit();
       }

       if (isset($_POST['submit-search'])) {
         $search=mysqli_real_escape_string($conn, $_POST['search']);


         $sql="SELECT * FROM rooms WHERE branch LIKE '%$search%'OR
         roomtype LIKE '%$search%'OR description LIKE '%$search%' ";

         $result=mysqli_query($conn,$sql);
         $queryResult=mysqli_num_rows($result);
         echo "<div class='result'>";
         echo "There are " .$queryResult. " results Found!";
          echo "</div>";

            if ($queryResult > 0) {
           while ($row = mysqli_fetch_array($result)) {

                                            echo "<div class='column' style='background-color:#ddd;'>";
                                         echo "<img src='roomimages/".$row['image']."'>";

                                         echo "</br>"."<h>"."NOKRAS: ".$row['branch'] ."</h> ";
                                         echo "<p>"."ROOM TYPE:".$row['roomtype'] ."</br>"."FEE: ".$row['amount']
                                         ."</br>"."Description: ".$row['description']."</p> ";

                           echo "<button><a href='index.php'>book now</a></button>";

                              echo "</div>";

           }
         } else {
        echo "Sorry!....there are no results matching your search!";
         }
       }
}

    ?>

 </div>
