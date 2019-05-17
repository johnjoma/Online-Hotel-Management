<?php
session_start();
include 'conn.php';
if(isset($_POST['submit'])){
    $branch  =$_POST['branch'];
	$halltype = $_POST['halltype'];
	$capacity =$_POST['capacity'];
	$reserve = $_POST['reserve'];
  $cash = $_POST['cash'];
  $description=$_POST['description'];


	$query = "INSERT INTO conference
	values('$branch','$halltype','$capacity','$reserve','$cash','$description','')";
	$result=$conn->query($query);
	if($result){
		echo "<div id='add'>Hall Successfully Added</div>";
	}
	else{
	 echo "Error..: Hall could not be added!";
	}
}
?>
