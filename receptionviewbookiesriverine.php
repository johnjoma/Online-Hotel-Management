<?php
include 'conn.php';

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nokras | Hotel|viewbookies</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="viewadmin.css">
    <link rel="stylesheet" href="mastercss/bootstrap.min.css">

    <center>
    <div id="navbar">
  NOKRAS HOTELS <strong>Riverine RECEPTION</strong> DASHBOARD

  </div>
  </center>
  </head>
  <body>

    <br><br>
    <style media="screen">
    input[type=text]{

      width: 20%;
      top:30px;
      margin-left: 30%;
      padding: 15px;
    	border: 1px solid #ccc;
    	border-radius: 3px;
    }
    input[type=date]{


      top:30px;

      padding: 15px;
    	border: 1px solid #ccc;
    	border-radius: 3px;
    }

    input[type=submit]{

      width:100px;
      margin-left: 5%;
      height:auto;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;


    }
    </style>


    <form class="" action="receptionsearchviewriverine.php" method="post">

    <input type="text" name="search" value="" placeholder="Enter code here">

                      From:<input type="date" name="startdate" value="" placeholder="Enter startprice">

                      To:<input type="date" name="enddate" value="" placeholder="Enter endprice">
                      <input type="submit" name="submit" value="search">


    </form>
    <br>

    <div style="width:95%; margin:10px auto;">


    <table class="table table-striped  ">
    <thead>
    <tr>
    <th style='width:50px;background-color: #4CAF50;'>CUSTOMER ID</th>

    <th style='width:150px;background-color: #4CAF50;'>First Name</th>

    <th style='width:150px;background-color: #4CAF50;'>Email</th>
    <th style='width:50px;background-color: #4CAF50;'>Contact</th>
    <th style='width:150px;background-color: #4CAF50;'>Room Type</th>
      <th style='width:150px;background-color: #4CAF50;'>Board Type</th>
    <th style='width:150px;background-color: #4CAF50;'>No of rooms</th>
    <th style='width:50px;background-color: #4CAF50;'>Adult</th>
    <th style='width:50px;background-color: #4CAF50;'>Children</th>
    <th style='width:950px;background-color: #4CAF50;'>Check in Date</th>
    <th style='width:950px;background-color: #4CAF50;'>Check out date</th>

    <th style='width:850px;background-color: #4CAF50;'>STATUS</th>
    <th style='width:850px;background-color: #4CAF50;'></th>


    </tr>
    </thead>
    <tbody>
    <?php
    include('conn.php');

    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    	$page_no = $_GET['page_no'];
    	} else {
    		$page_no = 1;
            }

    	$total_records_per_page =3;
        $offset = ($page_no-1) * $total_records_per_page;
    	$previous_page = $page_no - 1;
    	$next_page = $page_no + 1;
    	$adjacents = "2";

    	$result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `reservations`");
    	$total_records = mysqli_fetch_array($result_count);
    	$total_records = $total_records['total_records'];
        $total_no_of_pages = ceil($total_records / $total_records_per_page);
    	$second_last = $total_no_of_pages - 1; // total page minus 1

        $result = mysqli_query($conn,"SELECT * FROM `reservations` WHERE branch='riverine' LIMIT $offset, $total_records_per_page");
        while($row = mysqli_fetch_array($result)){
    		echo "<tr>
    			  <td>".$row["customer_id"]."</td>

    	 		  <td>".$row['firstname']."</td>
              <td>".$row['email']."</td>
              <td>".$row['contact']."</td>
              <td>".$row['roomtype']."</td>
                <td>".$row['boardtype']."</td>
              <td>".$row['no_rooms']."</td>
              <td>".$row['adult']."</td>
              <td>".$row['children']."</td>
              <td>".$row['datein']."</td>
              <td>".$row['dateout']."</td>
              <td>".$row['status']."</td>
              <td><a style='background-color:color: #4CAF50;' href='checkin.php?customer_id=".$row['customer_id']." '>Checkin</a> </br></br>
               <a href='checkout.php?customer_id=".$row['customer_id']."'>Checkout</a>
              </td>
    		   	  </tr>";
            }
    	mysqli_close($conn);
        ?>
    </tbody>
    </table>

    <div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
    <strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
    </div>

    <ul class="pagination">
    	<?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>

    	<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
    	<a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
    	</li>

        <?php
    	if ($total_no_of_pages <= 10){
    		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
    			if ($counter == $page_no) {
    		   echo "<li class='active'><a>$counter</a></li>";
    				}else{
               echo "<li><a href='?page_no=$counter'>$counter</a></li>";
    				}
            }
    	}
    	elseif($total_no_of_pages > 10){

    	if($page_no <= 4) {
    	 for ($counter = 1; $counter < 8; $counter++){
    			if ($counter == $page_no) {
    		   echo "<li class='active'><a>$counter</a></li>";
    				}else{
               echo "<li><a href='?page_no=$counter'>$counter</a></li>";
    				}
            }
    		echo "<li><a>...</a></li>";
    		echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
    		echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
    		}

    	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {
    		echo "<li><a href='?page_no=1'>1</a></li>";
    		echo "<li><a href='?page_no=2'>2</a></li>";
            echo "<li><a>...</a></li>";
            for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
               if ($counter == $page_no) {
    		   echo "<li class='active'><a>$counter</a></li>";
    				}else{
               echo "<li><a href='?page_no=$counter'>$counter</a></li>";
    				}
           }
           echo "<li><a>...</a></li>";
    	   echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
    	   echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                }

    		else {
            echo "<li><a href='?page_no=1'>1</a></li>";
    		echo "<li><a href='?page_no=2'>2</a></li>";
            echo "<li><a>...</a></li>";

            for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
              if ($counter == $page_no) {
    		   echo "<li class='active'><a>$counter</a></li>";
    				}else{
               echo "<li><a href='?page_no=$counter'>$counter</a></li>";
    				}
                    }
                }
    	}
    ?>

    	<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
    	<a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
    	</li>
        <?php if($page_no < $total_no_of_pages){
    		echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
    		} ?>
    </ul>



    </div>
  </body>
</html>
