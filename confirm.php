<?php

include 'conn.php';

if (isset($_POST['confirm'])) {
$code=$_POST['code'];
$query=mysqli_query($conn,"SELECT * FROM reservations WHERE customer_id='$code' ");
if(mysqli_num_rows($query)>0){
  mysqli_query($conn,"UPDATE reservations SET status='confirmed' WHERE customer_id='$code'");

  echo "<div class='alert success'>
  <span class='closebtn'>&times;</span>
  <strong>Congratulations! </strong>You have successfully confirmed Your reservation.</br> Thank you!
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
       alert(\"OOps..unable to make confirm your reservation. please try Again later or call us\");
       window.location=(\"index.php\")
       </script>";
}
}

if (isset($_POST['cancel'])) {
$code=$_POST['code'];
$query=mysqli_query($conn,"SELECT * FROM reservations WHERE customer_id='$code' ");
if(mysqli_num_rows($query)>0){
  mysqli_query($conn,"UPDATE reservations SET status='cancelled' WHERE customer_id='$code'");


  echo "<div class='alert success'>
  <span class='closebtn'>&times;</span>
  You have successfully cancelled Your reservation.Please contact us.</br> Thank you!
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
       alert(\"OOps..unable to Cancel your reservation. please try Again later or call us\");
       window.location=(\"index.php\")
       </script>";
}
}



 ?>
