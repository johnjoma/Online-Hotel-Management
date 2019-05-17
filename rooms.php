
<?php
    include 'roomsheader.php'
 ?>
 <style media="screen">
 input[type=text]{

   width: 30%;
   top:30px;
   margin-left: 30%;
   font-size: 15px;
 }
 input[type=submit]{

   width: 5%;
   margin-left: 5%;
   height:auto;
   background-color: #4CAF50;
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: none;
   cursor: pointer;


 }
 button{
   height:auto;
   background-color: #4CAF50;
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: none;
   cursor: pointer;

 }
 </style>
  <form class="" action="searchroom.php" method="post">
    <input type="text" name="search" placeholder="search Query...">

    <input type="text" name="startprice" value="" placeholder="enter start price">
  <input type="text" name="endprice" value="" placeholder="Enter end price">


    <button type="submit" name="submit-search">Find Room</button>


  </form>
  <br><br><br><br><br><br>


  <div id="btnContainer">
<button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button>
<button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
</div>
<br>
<div class="row">
      <?php
      $branch=$_GET['branch'];
      $datein=$_GET['datein'];
      $dateout=$_GET['dateout'];
      $adult=$_GET['adult'];
      $children=$_GET['children'];
      $no_rooms=$_GET['no_rooms'];
      $boardtype=$_GET['boardtype'];
      $roomtype=$_GET['roomtype'];
          $sql="SELECT * FROM rooms";

          $result= mysqli_query($conn,$sql);
          while ($row = mysqli_fetch_array($result)) {


                  echo "<div class='column' style='background-color:#ddd;'>";
               echo "<img src='roomimages/".$row['image']."'>";

               echo "</br>"."<h>"."NOKRAS: ".$row['branch'] ."</h> ";
               echo "<p>"."ROOM TYPE:".$row['roomtype'] ."</br>"."FEE: ".$row['amount']
               ."</br>"."Description: ".$row['description']."</p> ";

                      echo "<button><a href='bookingform.php?room_no=".$row['room_no']."&branch=".$branch."&boardtype=".$boardtype."
                      &datein=".$datein."&dateout=".$dateout."&children=".$children."&adult=".$adult."&no_rooms=".$no_rooms."&roomtype=".$roomtype."'>book now</a>  </button>";

                echo "</div>";



          }

       ?>

</div>
<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "100%";
    }
}
// Grid View
function gridView() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "20%";
    }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>


</body>
<footer>

</footer>
</html>
