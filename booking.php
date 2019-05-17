
<?php
session_start();
include 'conn.php';
if(isset($_POST['booknow'])){
  $customer_id=$_POST['customerid'];
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

	$query = "INSERT INTO reservations
	VALUES('$customer_id','$branch','$fname','$lname','$email','$contact','$roomtype','$boardtype','$no_rooms','$adult',
    '$children','$datein','$dateout','not confirmed')";
	$result=$conn->query($query);
	if($result){

  echo "<div class='alert success'>
  <span class='closebtn'>&times;</span>
  <strong>Congratulations! </strong>".$_POST['fname']." ,You have successfully reserved your Stay.</br> Here is your Booking code:<strong> ".$_POST['customerid']."
  </strong></br>use it to confirm or cancel booking.</br> Thank you!
</div> <script>
var close = document.getElementsByClassName('closebtn');
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = '0';
        setTimeout(function(){ div.style.display = 'none'; }, 600);
    }
}
</script>";
	}
	else{
    echo "<script type=\"text/javascript\">
         alert(\"OOps..unable to make reservations. please try Again\");
         window.location=(\"index.php\")
         </script>";
	}
}
?>
