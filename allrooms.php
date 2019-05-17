<?php
include 'addroom.php'

?>


<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <title> Nokras|Hotel</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="animate.css">

  <center>
  <div id="navbar">
NOKRAS HOTEL ADMIN DASHBOARD
<a href="dashboard.php"><i class="fa fa-users"></i>DASHBOARD</a>
<a href="conferenceht.php"><i class="fa fa-users"></i>Add CONFERENCE HALL</a>
<a href="viewrooms.php"><i class="fa fa-bed"></i>view Rooms</a>
<a href="viewconference.php"><i class="fa fa-users"></i>view halls</a>
<a href="viewbookies.php"><i class="fa fa-users"></i>view Bookies</a>
</div>
</center>
</head>


  <div class="row">
  <div class="col-75">
    <div class="container">
      <form  action="allrooms.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-50">
            <h3>ADD ROOMS</h3>
            <label for="branch"><i class="fa fa-university"></i> BRANCH</label>
            <select name="branch">
     <option value="muranga">Nokras Murang'a</option>
     <option value="riverine">Nokras Sagana</option>
   </select>
			<label for="roomtype"><i class="fa fa-bed"></i>ROOM TYPE</label>
            <select name="roomtype">
          <option value="A">Add room...</option>
       <option value="standard">Standard Single</option>
       <option value="Dstandard">Standard Double</option>
       <option value="duluxe">Duluxe single</option>
       <option value="Dduluxe">Duluxe Double</option>
       <option value="executive"> Executive Single</option>
       <option value="Dexecutive"> Executive Double</option>
       <option value="luxurious">Luxurious single</option>
       <option value="Dluxurious">Luxurious Double</option>
       <option value="cottage">Cottage Single</option>
       <option value="Dcottage">Cottage Double</option>
       <option value="vip">Vip</option>

     </select>
     <label for="rumno"><i class="fa fa-list-ol"></i> ROOM NO:</label>
     <input type="text" name="room" value="">




       <div class="row">
              <div class="col-50">
                 <label for="image"><i class="fa fa-file-image-o"></i> Insert Images</label>

			<input type="file" name="image" >
              </div>
              <div class="col-50">

              </div>
            </div>
          </div>


          <div class="col-50">
            <h3>NOKRAS</h3>
            <label for="nokras">Services</label>
            <div class="icon-container">
              <i class="fa fa-cutlery" style="color:navy;"></i>
              <i class="fa fa-bed" style="color:blue;"></i>
              <i class="fa fa-users" style="color:red;"></i>
              <i class="fa fa-glass" style="color:orange;"></i>
            </div>

            <label for="cash"><i class="fa fa-money"></i>  KSH:</label>
            <input type="text" id="adr" name="fee" placeholder="enter fee">

            <div class="row">
              <div class="col-50">
                 <label for="description"><i class="fa fa-file-image-o"></i> Description</label>

			<textarea name="text" rows="4" cols="40" placeholder="say somrthing ........"></textarea>
              </div>

            </div>
          </div>

        </div>

       <input type="submit" name="submit" class="btn" >

	   <input type="reset" name="reset"  class="btn">




      </form>
    </div>
  </div>
</form>


<body>
  </html>
