<?php
   include 'conn.php'

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>update Records</title>
  </head>
  <body>
    <h1>update rooms</h1>

<?php
    $userid=$_REQUEST['userid'];
$sql="SELECT * FROM book WHERE userid='$userid'";
$result=mysqli_query($conn,$sql) or die("". mysql_error($conn));
$row=mysqli_fetch_array($result);
?>



<form method="POST" action="editbookies.php">
  <input type="hidden" name="userid" value="<?php echo $row['userid']; ?>">
branch:<select name="branch">
  <option value="<?php echo $row['branch']; ?>"> <?php echo $row['branch']; ?></option>
<option value="muranga">Nokras Murang'a</option>
<option value="riverine">Nokras Sagana</option>

</select><br><br>


firstname:<input type="text" name="fname" value="<?php echo $row['firstname']; ?>"><br><br>
lastname:<input type="text" name="lname" maxlength="10" value="<?php echo $row['lastname']; ?>"><br><br>
Email:<input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
Contact:<input type="text" name="contact"  value="<?php echo $row['contact']; ?>"><br><br>
Room Type:<select name="roomtype" value=""required>
  <option value="<?php echo $row['roomtype']; ?>"><?php echo $row['roomtype']; ?></option>
<option value="type">choose type of room</option>
<option value="standard">Standard Single</option>
<option value="dstandard">Standard Double</option>
<option value="duluxe">Duluxe single</option>
<option value="dduluxe">Duluxe Double</option>
<option value="executive"> Executive Single</option>
<option value="dexecutive"> Executive Double</option>
<option value="luxurious">Luxurious single</option>
<option value="dluxurious">Luxurious Double</option>
<option value="cottage">Cottage single</option>
<option value="dcottage">Cottage Double</option>
<option value="vip">Vip </option>

</select></br></br>


BOARD Type:<select name="boardtype" value="" required>
  <option value="<?php echo $row['boardtype']; ?>"><?php echo $row['boardtype']; ?></option>
<option value="type">choose board</option>
<option value="bed_breakfast">bed&Breakfast</option>
<option value="half_board">Half board</option>
<option value="full_board">Full board</option>

</select><br><br>

No of Rooms:<select name="no_rooms" value=""required>
  <option value="<?php echo $row['no_rooms']; ?>"><?php echo $row['no_rooms']; ?></option>
<option value="type">choose no of rooms</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5+</option>
</select><br><br>

Adult:<select name="adult" value=""required>
  <option value="<?php echo $row['adult']; ?>"><?php echo $row['adult']; ?></option>
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
</select><br><br>


Children:  <select name="children" value="">
  <option value="<?php echo $row['children']; ?>"><?php echo $row['children']; ?></option>
     <option value="no">choose no of children</option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5 </option>
<option value="6">5+ </option>

</select><br><br>


Check in Date:<input type="date" name="datein"  value="<?php echo $row['checkin']; ?>"><br><br>
Check in Out:<input type="date" name="dateout"  value="<?php echo $row['checkout']; ?>"><br><br>
<input type="hidden" name="date"  value="<?php echo $row['date_booked']; ?>"><br><br>

<input type="submit" name="submit" value="Submit">
</form>
</div>

<?php
if (isset($_POST['submit']))
{
  $userid=$_POST['userid'];
  $branch=$_POST['branch'];
    $fname=$_POST['fname'];
	$lname = $_POST['lname'];
	$email =$_POST['email'];
	$contact = $_POST['contact'];
	$roomtype= $_POST['roomtype'];
  $boardtype= $_POST['boardtype'];
  $no_rooms= $_POST['no_rooms'];
	$adult =$_POST['adult'];
	$children  =$_POST['children'];
  $datein  =$_POST['datein'];
  $dateout  =$_POST['dateout'];
  $date_booked=$_POST['date_booked'];


	$sql="UPDATE book SET userid='$userid',branch='$branch',firstname='$fname',lastname='$lname',email='$email',
	       contact='$contact',roomtype='$roomtype',boardtype='$boardtype'
         ,no_rooms='$no_rooms',adult='$adult',children='$children',checkin='$datein' ,checkout='$dateout'
         ,date_booked='$date_booked' WHERE userid='$userid'";
	mysqli_query($conn,$sql) or die("Error".mysqli_error($conn));

	header('location:viewbookies.php');
	}

?>
</body>
</html>
