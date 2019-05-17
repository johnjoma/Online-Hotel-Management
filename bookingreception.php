
<?php
session_start();
include 'conn.php';
if(isset($_POST['booknow'])){
  $branch=$_POST['branch'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $roomtype=$_POST['roomtype'];
  $boardtype=$_POST['boardtype'];

  $no_rooms=$_POST['no_rooms'];
  $adult=$_POST['adult'];
  $children=$_POST['children'];
  $datein=$_POST['datein'];
  $dateout=$_POST['dateout'];

  $query="INSERT INTO reservations VALUES ('','$branch','$fname','$lname','$email','$contact',
    '$roomtype','$boardtype','$no_rooms',
    '$adult','$children','$datein','$dateout','')";

	$result=$conn->query($query);
	if($result){
       echo "<script type=\"text/javascript\">
         alert(\"you have booked successfully\");
         window.location=(\"receptionviewbookies.php\")
         </script>";
	}
	else{
    echo "<script type=\"text/javascript\">
         alert(\"OOps..unable to book. please try Again\");
         window.location=(\"receptionviewbookies.php\")
         </script>";
	}
}
?>
