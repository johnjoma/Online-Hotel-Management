<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> user portal</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="mastercss/style.css">
    <link rel="stylesheet" href="mastercss/user.css">


<head>
  <center>
    <div id="navbar">


      <a href="rooms.php" id="linkref"><i class="fa fa-bed"></i>ROOMS</a>
      <a href="dining.html" id="linkref"><i class="fa fa-cutlery"></i>DINING&BARS</a>

     <a href="conference.html" id="linkref"><i class="fa fa-users"></i>CONFERENCE</a>
     <a href="about.html" id="linkref"><i class="fa fa-book"></i>ABOUT</a>
     <a href="experience.php" id="linkref"><i class="fa fa-smile-o"></i>EXPERIENCE</a>
     <a href="index.php" id="linkref"><i class="fa fa-smile-o"></i>log out</a>


  </div>
  </center>

  </head>
  <body>

<button class="tablink" onclick="openPage('book', this, ' #0efa03 ')" id="defaultOpen">BOOk ROOM</button>
<button class="tablink" onclick="openPage('manage', this, 'green')" >Manage bookings</button>
<button class="tablink" onclick="openPage('notification', this, ' #fa1903 ')">Notifications</button>
<button class="tablink" onclick="openPage('report', this, 'orange')">Reports</button>

<div id="book" class="tabcontent">
  <h3>BOOKING FORM</h3>
  <div class="row">
    <div class="col-75">
      <div class="container">
      <form action="" method="post">

          <div class="row">
            <div class="col-50">
              <h3>BOOKING FORM</h3>
              <label for="branch"><i class="fa fa-university"></i> BRANCH</label>
              <select name="branch">
                <option value="choose">Choose Hotel branch you want to go..</option>

       <option value="muranga">Nokras Muranga</option>
       <option value="riverine">Nokras Sagana</option>

     </select>


     <label for="fname"><i class="fa fa-user"></i> First Name</label>
     <input type="text" id="fname" name="fname" placeholder="first name">
   <label for="lname"><i class="fa fa-user"></i> Last Name</label>
     <input type="text" id="lname" name="lname" placeholder="Last Name">
     <label for="email"><i class="fa fa-envelope"></i> Email</label>
     <input type="text" id="email" name="email" placeholder="john@example.com">
     <label for="adr"><i class="fa fa-mobile"></i> Contact</label>
     <input type="text" id="adr" name="contact" placeholder="enter your contact">

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



         <label for="room"><i class="fa fa-bed"></i>BOARD</label>
                <select name="boardtype" required>

             <option value="type">choose board</option>
             <option value="bed_breakfast">bed&Breakfast</option>
             <option value="half_board">Half board</option>
             <option value="full_board">Full board</option>

           </select>

         <label for="room"><i class="fa fa-bed"></i>No of Rooms</label>
                <select name="no_rooms" required>

             <option value="type">choose no of rooms</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5+</option>
           </select>



              <div class="row">
                <div class="col-50">
                  <label for="checkin"><i class="fa fa-calendar" aria-hidden="true"></i>
  Check in date:</label>

  				<input type="date" name="datein" required >
                </div>
                <div class="col-50">
                  <label for="checkout"><i class="fa fa-calendar" aria-hidden="true"></i>
  Check out date:</label>
                  <input type="date"  name="dateout" value="">
                </div>
              </div>
            </div>


            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>

                	   <label for="adult"><i class="fa fa-users"></i> Adults</label>
                            <select name="adult" required>


                         <option value="no">choose no of Adults</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5 </option>
                         <option value="6"> 6</option>
                         <option value="7">7</option>
                         <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                			<label for="children"><i class="fa fa-child"></i> Children</label>
                            <select name="children">

                               <option value="no">choose no of children</option>
                               <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5 </option>
                			   <option value="6">5+ </option>

                            </select>
              <label for="cname">Name on Card</label>
              <input type="text" id="cname" name="cardname" placeholder="John kimani">
              <label for="ccnum">Credit card number</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="September">
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2018">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
              </div>
            </div>

          </div>

         <input type="submit"  name="booknow" value="booknow" class="btn">
         <input type="reset" name="Reset" value="Reset" class="btn">

        </form>
      </div>
    </div>


</div>

<div id="manage" class="tabcontent">
  <h3>News</h3>
  <p>Some news this fine day!</p>
</div>

<div id="notification" class="tabcontent">
  <h3>Contact</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="report" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div>

<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


    <br><br>
    <section >
      <li>my bokings</li>
      <li>manage bookings
         <ol>edit </ol>
         <ol>Delete </ol>
         <ol>cancel </ol>
         <ol> confirmation of booking</ol>
      </li>
    </section>
    <section>
      <li>notifications</li>
    </section>
  <section>
    Reports on activities
    <li>bookings</li>
    <li>editing</li>
    <li>deletion</li>
    <li>cancelation</li>
  </section>
  </body>
</html>
