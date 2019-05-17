<?php

include 'conn.php';


$customer_id=$_REQUEST['customer_id'];
$query=mysqli_query($conn,"SELECT * FROM reservations WHERE customer_id='$customer_id' ");
if(mysqli_num_rows($query)>0){
  mysqli_query($conn,"UPDATE reservations SET status='Checked In' WHERE customer_id='$customer_id'");

      header('location:receptionviewbookies.php');
}
 ?>
