<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <title> Nokras|Hotel</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="mastercss/style.css">
  <center>
  <div id="navbar">

    <a href="index.php" id="linkref"><i class="fa fa-home"></i>HOME</a>
    <a href="checkrates.php" id="linkref"><i class="fa fa-bed"></i>ROOMS</a>
    <a href="dining.html" id="linkref"><i class="fa fa-cutlery"></i>DINING</a>

   <a href="conference.html" id="linkref"><i class="fa fa-users"></i>CONFERENCE</a>
   <a href="experience.php" id="linkref"><i class="fa fa-smile-o"></i>EXPERIENCE</a>



</div>
</center>
</head>
<body>


<style>
  input[type=email] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
  }
  textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
  }


  input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
  }

  input[type=submit]:hover {
      background-color: #45a049;
  }
  .about {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      width: 50%;

  }

  .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      width: 25%;
      margin-left: 70%;

  }
  .muranga {
      border-radius: 5px;
      padding: 20px;
      width: 30%;
      margin-left:2%;
      position: absolute;
      top: 500px;


  }
  .riverine {
      border-radius: 5px;
      padding: 20px;
      width: 30%;
      position: absolute;
      top: 500px;
      left: 35%;

  }
  label{

    font-size: 20px;
    font-family: monospace;
  }
  .contactmuranga {
      border-radius: 5px;
      padding: 20px;
      width: 30%;
      margin-left:5%;
      font-size: 12px;
      color: #fff;
  }
  .contactriverine {
      border-radius: 5px;
      padding: 20px;
      width: 30%;
      margin-left:5%;
      font-size: 12px;
      color: #fff;

  }
  img{

    height: 100px;
    width: 100px;
    margin-right:30%;
    float: right;
  }
  </style>
  </head>
  <body>
    <div class="about">
      <h3>NOKRAS HOTEL MURANG'A</h3>
      <p>Hotel Nokras is one of the best hotels in Murang’a with spacious rooms fitted with modern amenities that offer everything you need to feel at home. It also offers meeting places for your business needs and different set up for dinning and bar for your entertainment.<br>
The hotel is set in a prime location behind Kenol Kobil Petrol Station and only separated by a wall from the famous Maguna Andu- Supermarket along Murang’a- Makuyu road.<br> It’s 3 mins drive from Murang’a town and only One & a half hours drive from Nairobi.

Visit us to discover more!!</p><br><br>
<h3>NOKRAS RIVERINE & SPA</h3>
<p>Located on the hills of Sagana, Nokras Riverine Resort & Spa is within easy reach for most leisure and business travelers. The Resort offers a unique combination of a hotel and of a residence experience. Uniquely placed next to the famous Sagana River within view of Mt. Kenya and breathtaking views of the surrounding hills, this resort allows our guests to have an exceptional experience in a perfect setting of the rich cultural countryside life.<br>

Discover our quintessential accommodation thats characteristic of a modern lifestyle, yet full of natural beauty. Stroll through our beautifully manicured garden that will therapeutically shrink away all the pressures of your day-to-day life. And don’t miss to indulge in our other range of facilities that include:-  Fitness centre, Spa & Sauna, swimming pool etc to regenerate your senses.<br>

Just at Nokras Riverine Resort & Spa.</p>

    </div>
  <div class="container">
    <form action="about.php" method="post">
      <h3>Contact Form</h3>
      <label for="email">EMAIL:</label>
      <input type="email" id="fname" name="email" placeholder="Your email..">

      <label for="subject">Subject</label>
      <textarea id="subject" name="text" placeholder="Write something.." style="height:100px"></textarea>

      <input type="submit" value="Send message" name="submit">
    </form>
  </div>

  <div class="muranga">
    <h3>NOKRAS HOTELS | MURANG'A </h3>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.495150911552!2d37.14986361415479!3d-0.7292545354763951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1828a282c110e925%3A0x7ba86b5c2fcd27cf!2sHotel+Nokras!5e0!3m2!1sen!2ske!4v1533722529056" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <div class="riverine">
    <h3>Nokras Riverine & Spa</h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.549997498547!2d37.209336114154574!3d-0.6644959354498904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1828995354c4b84b%3A0xaf53e354ba102aa3!2sNokras+Riverine+Hotel+%26+Spa!5e0!3m2!1sen!2ske!4v1533722678936" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

</body>
<br><br><br>
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
         window.location=(\"about.php\")
         </script>";
	}
}
?>

<footer>
  <img src="images/logo.png">
<div class="contactmuranga">
  <h3>NOKRAS MURANG'A</h3>
  <p>
  Website: www.nokrashotels.co.ke/muranga/
P.O. Box 990 00600, Nairobi, Kenya
Email: info@hotelnokras.co.ke
<br>
<h3><strong>RESERVATIONS/BOOKINGS</strong></h3>
<br>
Cell No. : +254 708 604 747
Mobile Number: +254 795 931 615<br>
Email: info@hotelnokras.co.ke
  </p>
</div>
<div class="contactriverine">
  <h3>NOKRAS RIVERINE & SPA</h3>
  <p>
    Website: www.nokrasriverine.co.ke
    P.O. Box 540 00600, Nairobi, Kenya<br>
    Email: info@nokrasriverine.co.ke
<br>
<h3><strong>RESERVATIONS/BOOKINGS</strong></h3>
<br>
Cell No. :+254 709 644 300
Landline: +254 703 391 411<br>
Email: info@nokrasriverine.co.ke
  </p>
</div>
</footer>
</html>
