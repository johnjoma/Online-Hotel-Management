<?php

include 'conn.php';
if(isset($_POST['submit'])){
	$email =$_POST['email'];
	$message = $_POST['text'];
	$query = "INSERT INTO messages
	values('','$email','$message')";
	$result=$conn->query($query);
	if($result){
		echo "<div class='alert success'>
		<span class='closebtn'>&times;</span>
		<strong>Your message has been sent!</strong>
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
         alert(\"OOps..unable to send the message. please try Again or contact Nokras Hotel\");
         window.location=(\"index.php\")
         </script>";
	}
}
?>
