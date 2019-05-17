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



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}

.icon {
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
    background-color:#27AE60;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}

textarea {
 width: 50%;
 margin-bottom: 20px;
 padding: 12px;
 border: 1px solid #ccc;
 border-radius: 3px;
}

</style>

<?php
    $Rnm=$_REQUEST['room_no'];
$sql="SELECT * FROM rooms WHERE room_no='$Rnm'";
$result=mysqli_query($conn,$sql) or die("". mysql_error($conn));
$row=mysqli_fetch_array($result);
?>

<form action="editrooms.php" style="max-width:500px;margin:auto;" method="POST">
  <h2>Update Room Details</h2>
  <div class="input-container">
      <input type="hidden" name="room" value="<?php echo $row['room_no']; ?>">
Branch:<input type="text" class="input-field" name="branch" value="<?php echo $row['branch']; ?>">
</div>


  <div class="input-container">
    Room Type:  <select name="roomtype" required class="input-field">
<option value="<?php echo $row['roomtype']; ?>"><?php echo $row['roomtype']; ?></option>
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

</select>
  </div>

  <div class="input-container">
FEE:<input type="number" class="input-field" name="fee" value="<?php echo $row['amount']; ?>">
  </div>

  <div class="input-container">
    DESCRIPTION:<textarea type="textarea" class="input-field" name="text" rows="8" cols="60"value="<?php echo $row['description'];?>"><?php echo $row['description'];?></textarea>
  </div>

  <input type="submit" name="submit" value="Submit" class="btn">
</form>

<?php
if (isset($_POST['submit']))
{
  $Rnm=$_POST['room'];
  $branch=$_POST['branch'];
  $Rnm=$_POST['room_no'];
  $Rtype=$_POST['roomtype'];
  $fee=$_POST['fee'];

  $text=$_POST['text'];

	$sql="UPDATE rooms SET room_no='$Rnm',branch='$branch',roomtype='$Rtype',amount='$fee',description='$text' WHERE room_no='$Rnm'";
	mysqli_query($conn,$sql) or die("Error".mysqli_error($conn));

	header('location:viewrooms.php');
	}

?>
</body>
</html>
