<?php
include 'conference.php'

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
<a href="viewconference.php"><i class="fa fa-users"></i>view halls</a>

</div>
</center>
</head>

  <div class="row">
  <div class="col-75">
    <div class="container">
    <form action="" method="post">
        <div class="row">
          <div class="col-50">
            <h3>ADD HALLS</h3>
            <label for="branch"><i class="fa fa-university"></i> BRANCH</label>
            <select name="branch">
     <option value="muranga">Nokras Murang'a</option>
     <option value="sagana">Nokras Riverine Sagana</option>
   </select>
			<label for="halltype"><i class="fa fa-building"></i>HALL TYPE</label>
            <select name="halltype">
          <option value="A">Add conference hall...</option>
       <option value="h1">hall1</option>
       <option value="h2">hall2</option>
       <option value="h3">hall3</option>
       <option value="h4">hall4</option>
       <option value="h5"> hall5</option>
       <option value="h6"> hall6</option>
       <option value="h7">hall7</option>
       <option value="h8">hall8</option>
      <option value="h9">hall9</option>

     </select>




       <div class="row">
              <div class="col-50">
                 	<label for="capacity"><i class="fa fa-users"></i> CAPACITY:</label>
          <input type="text"  name="capacity" >
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
			<label for="reservation"><i class="fa fa-list-ol"></i> RESERVATION TYPE:</label>
            <select name="reserve">
         <option value="res">reservation type..</option>
     <option value="halfday">Half day</option>
     <option value="fullday">Full day</option>
	 </select>

            <label for="cash"><i class="fa fa-money"></i> KSH:</label>
            <input type="text"  name="cash" placeholder="enter fee">


            <div class="row">
              <div class="col-50">
                 <label for="description"><i class="fa fa-file-image-o"></i> Description</label>

			<textarea name="description" rows="4" cols="40" placeholder="say somrthing ........"></textarea>
              </div>

            </div>
          </div>

        </div>

      <input type="submit"  name="submit" value="Add hall" class="btn">
	   <input type="reset" name="reset"  class="btn">

</form>


<body>
  </html>
