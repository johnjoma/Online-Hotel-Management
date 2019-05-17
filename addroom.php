<?php
$msg="";
session_start();
include 'conn.php';
if(isset($_POST['submit'])){
  $branch=$_POST['branch'];
  $Rtype=$_POST['roomtype'];
  $Rnm=$_POST['room'];

  $fee=$_POST['fee'];


  $target="roomimages/".basename($_FILES['image']['name']);

  $image=$_FILES['image']['name'];
  $text=$_POST['text'];



	$query = "INSERT INTO rooms
	values('$branch','$Rnm','$Rtype','$fee','$image','$text')";
  $result=$conn->query($query);

  if (move_uploaded_file($_FILES['image']['tmp_name'],$target)) {

    $msg="Image uploaded successfully";
  }else {
    $msg="There was a problem uploading image";
  }


  if($result){
    echo "<div class='alert success'>
    <span class='closebtn'>&times;</span>
    <strong>".$_POST['roomtype']."  </strong>Room Has been added successfully!
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
        alert(\"OOps..unable to add rooms. please try Again\");
        window.location=(\"allrooms.php\")
        </script>";
	}
}

?>
