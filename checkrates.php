

 <?php
     include 'roomsheader.php'
  ?>


<section class="neto">
  <div class="slideshow-container">

  <div class="mySlides fade">

  <img src="roomimages/nokras10.jpg" class="slide" >
  <div class="text">Share a Grand Experience</div>
  </div>

  <div class="mySlides fade">

  <img src="roomimages/nokras5.jpg" class="slide">
  <div class="text">The lap of luxury</div>
  </div>

  <div class="mySlides fade">

  <img src="roomimages/nokras8.jpg" class="slide">
  <div class="text">Make Yourself at Home.</div>
  </div>

  <div class="mySlides fade">

  <img src="roomimages/nokras9.jpg" class="slide">
  <div class="text">I feel comfortable here.</div>
  </div>

  </div>
  <br>

  <div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
  }
  </script>

  </section>
  <br><br><br><br>


   <div id="btnContainer">
 <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button>
 <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
 </div>
 <br>
 <div class="row">
       <?php
           $sql="SELECT * FROM rooms";

           $result= mysqli_query($conn,$sql);
           while ($row = mysqli_fetch_array($result)) {



                               echo "<div class='column' style='background-color:#ddd;'>";
                            echo "<img src='roomimages/".$row['image']."'>";

                            echo "</br>"."<h>"."NOKRAS: ".$row['branch'] ."</h> ";
                            echo "<p>"."ROOM TYPE:".$row['roomtype'] ."</br>"."FEE: ".$row['amount']
                            ."</br>"."Description: ".$row['description']."</p> ";

              echo "<button><a href='index.php'>book now</a></button>";

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
</section>

 </body>
 <footer>

 </footer>
 </html>
