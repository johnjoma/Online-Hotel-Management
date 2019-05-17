<?php
include 'conn.php';

if (isset($_POST['cancel'])) {
$code=$_POST['code'];
$query=mysqli_query($conn,"SELECT * FROM reservations WHERE customer_id='$code' ");
if(mysqli_num_rows($query)>0){
  mysqli_query($conn,"UPDATE reservations SET status='cancelled' WHERE customer_id='$code'");

}
else{
  echo "Code does not exit";
}
}




 ?>
