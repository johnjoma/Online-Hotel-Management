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
    <link rel="stylesheet" href="mastercss/bootstrap.min.css">

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
    <div style="width:90%; margin:10px auto;">


    <table class="table table-striped  ">
    <thead>
    <tr>
    <th style='width:150px;background-color: #4CAF50;'>Branch</th>
    <th style='width:250px;background-color: #4CAF50;'>NO.OF ROOMS</th>
    <th style='width:250px;background-color: #4CAF50;'>ROOM TYPE</th>
    <th style='width:250px;background-color: #4CAF50;'>FEE</th>

    <th style='width:250px;background-color: #4CAF50;'>DESCRIPTION</th>
    <th style='width:250px;background-color: #4CAF50;'>modify</th>



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

    	$total_records_per_page =5;
        $offset = ($page_no-1) * $total_records_per_page;
    	$previous_page = $page_no - 1;
    	$next_page = $page_no + 1;
    	$adjacents = "2";

    	$result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `rooms`");
    	$total_records = mysqli_fetch_array($result_count);
    	$total_records = $total_records['total_records'];
        $total_no_of_pages = ceil($total_records / $total_records_per_page);
    	$second_last = $total_no_of_pages - 1; // total page minus 1

        $result = mysqli_query($conn,"SELECT * FROM `rooms` LIMIT $offset, $total_records_per_page");
        while($row = mysqli_fetch_array($result)){
    		echo "<tr>

    			  <td>".$row['branch']."</td>
    	 		  <td>".$row['room_no']."</td>
    		   	  <td>".$row['roomtype']."</td>
              <td>".$row['amount']."</td>

              <td>".$row['description']."</td>

              <td> <a  href='editrooms.php?room_no=".$row['room_no']."' style='color:#013ADF;'><i class='fa fa-pencil-square-o'style='color:#013ADF;'></i>Edit</a></br>
               </br> <a  href='deleteroom.php?room_no=".$row['room_no']."'><i class='fa fa-trash' style='color:#FF0000;'></i>Delete</a></td>


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
