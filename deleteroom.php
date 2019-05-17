<?php
require 'conn.php';

 $Rnm=$_GET['room_no'];

$sql = "DELETE FROM rooms WHERE room_no='$Rnm'" ;
$query= mysqli_query($conn,$sql);
if (!$query){
	die ('SQL Error:' .mysqli_error($conn));
}
 else {
    echo "Message deleted successfull";

    header('location:viewrooms.php');
}

?>
