<?php

$con=mysqli_connect("localhost","root","","hotel") or die(mysqli_error());

if((isset($_POST['submit']))){
    $Arrivaldate = $_POST['arrivaldate'];
    $Departuredate = $_POST['departuredate'];
    $Suite = $_POST['suite'];
    $sql="select * from booking WHERE (arrivaldate BETWEEN '$Arrivaldate'AND '$Departuredate') OR
     (departuredate BETWEEN '$Arrivaldate' AND '$Departuredate')
     OR (arrivaldate <= '$Arrivaldate' AND departuredate >= '$Departuredate') AND suite='$Suite'";

    $rs=mysqli_query($con,$sql);
    
		if(mysqli_num_rows($rs)>0){
                echo '<script>alert("Sorry,But Room is Unavailable")</script>';
            } 
        else {
                echo '<script>alert("Room is Available")</script>';  
            }
   
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
  <div class="head">
  <video autoplay muted loop class="myVideo">
    <source src="video.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
<div id="myNav" class="overlay" >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a>
  <div class="overlay-content">
    <a href="#abt">About</a>
    <a href="Room.html">Rooms</a>
    <a href="image.html">Gallery</a>
    <a href="explore.html">Explore</a>
    <a href="Location.html">Location</a>
    <a href="Contact.php">Contact Us & Feedback</a>
    <a href="cancel.php">Request for Reservation Cancellation</a>
    <a href="login.php">Admin</a>
  </div>
</div>
<span style="font-size:30px;cursor:pointer; margin-left: 20px; position: fixed; " onclick="openNav()" float:right; >&#9776; Menu</span>
<div class="logo" >
  <center><a href="#"><img src="logo.png" alt="The Hotel Logo" width="250px" height="230px"></a></center>
</div>
<div style="padding-top: 220px;"><center><h1>DISCOVER</h1></center></div>
<center><a href="#1"><img src="discover.png" alt="Discover" style="height: 100px; width: 70px;"></a></center>
  </div>
<div id="1" class="head1">
<div class="w3-row-padding">
<form  method="POST" >
  <div class="w3-col m2">
    <label><i class="fa fa-calendar-o"></i> Check In</label><br>
    <input id="arrivaldate " style="padding: 7px;" type="date" name="arrivaldate" min="2020-11-15">
  </div>
  <div class="w3-col m2">
    <label><i class="fa fa-calendar-o"></i> Check Out</label><br>
    <input id="departuredate" style="padding: 7px;" type="date" name="departuredate" min="2020-11-15">
  </div>
  <div class="w3-col m2">
    <label><i class="fa fa-male"></i> Adults</label>
    <input class="w3-input w3-border" type="number" placeholder="1">
  </div>
  <div class="w3-col m2">
  <label for="country">Suite Type: </label><br><select id="suite" style="padding: 9px; padding-right: 110px;" name="suite" required>
    <option value="Deluxe">Deluxe</option>
    <option value="Deluxe">Deluxe 1</option>
    <option value="Deluxe">Deluxe 2</option>
    <option value="Queen">Queen</option>
    <option value="Queen">Queen 1</option>
    <option value="Queen">Queen 2</option>
    <option value="King">King</option>
  </select>
</div>
  <div class="w3-col m2">
    <label><i class="fa fa-child"></i> Kids</label>
    <input class="w3-input w3-border" type="number" placeholder="0">
  </div>
  <div class="w3-col m2">
    <label><i class="fa fa-search"></i> Availability</label>
      <button class="w3-button w3-block w3-black" type = "submit" name="submit">Check Availability</button>
  </form>
  </div>
</div>
</div>
<center><div class="container">
    <img src="namaste.jpg" alt="About Us" style="width:100%;">
    <div id="abt"class="content">
      <h1>About Us</h1>
      <p>Where passion for details, attention to service and excellence is a must. We are dedicated to surpassing our guests’ expectations and are a member of the renowned organization of The Leading Hotels of the World®: Adding extra touches such as a “Five Star Diamonds of the American Academy of Hospitality and Science” restaurant, one of the largest Spas in Latin America offering signature treatments, and a Tennis Pro. Marquis Los Cabos emerges as a new standard-bearer of the royal treatment in Mexico. No wonder the Signature Angel statues can be seen around the hotel—they have found paradise! </p>
    </div>
</div></center>
<div class="w3-container" style="background-color: rgb(252, 204, 211); border: black;">
  <h3><b>Our Hotels</b></h3>
  <h6>You can find our hotels anywhere in the world:</h6>
</div>

<div class="w3-row-padding w3-padding-16 w3-text-white w3-large" style="background-color: rgb(220, 231, 247);">
  <div class="w3-half w3-margin-bottom">
    <div class="w3-display-container" >
      <img src="01.jpg" alt="Cinque Terre" style="width:100% ">
      <span class="w3-display-bottomleft w3-padding">Cinque Terre</span>
    </div>
  </div>
  <div class="w3-half w3-margin-bottom" style="bottom: auto;">
    <div class="w3-display-container">
      <img src="06.jpg" alt="Mumbai" style="width:100%">
      <span class="w3-display-bottomleft w3-padding">Mumbai</span>
    </div>
  </div>
  <div class="w3-half">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <div class="w3-display-container">
          <img src="02.jpg" alt="New York" style="width:100%">
          <span class="w3-display-bottomleft w3-padding">New York</span>
        </div>
      </div>
      <div class="w3-half w3-margin-bottom">
        <div class="w3-display-container">
          <img src="03.jpg" alt="San Francisco" style="width:100%">
          <span class="w3-display-bottomleft w3-padding">San Francisco</span>
        </div>
      </div>
    </div>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <div class="w3-display-container">
          <img src="04.jpg" alt="Pisa" style="width:100%">
          <span class="w3-display-bottomleft w3-padding">Pisa</span>
        </div>
      </div>
      <div class="w3-half w3-margin-bottom">
        <div class="w3-display-container">
          <img src="05.jpg" alt="Paris" style="width:100%">
          <span class="w3-display-bottomleft w3-padding">Paris</span>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="bg">
<center><div class="ccontainer" >
  <a href="explore.html" alt="touristplaces"><img src="explore.jpg" alt="Explore"  ></a>
  <div class="content">
    <h1>Explore</h1>
    <center></p>Whatever your pleasure, the ancient landscape offers endless opportunities for outdoor recreation – whether it's rock climbing, horseback riding, a Grand Canyon air tour or stargazing with a professional astronomer. Succumb to the allure of the desert and prepare yourself for an adventure like no other.<p></center>
  </div>
</div></center>
</div>


<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>


		<div class="footer-awards">


											<div class="footer-logo">
							<img src="https://ranchovalencia.com/wp-content/uploads/2020/08/FTG_FiveStarRatingLogo_2020_GoldPMS872_SPA.png" alt="2020 Forbes Travel Guide Spa Five Star Logo">
						</div>

											<div class="footer-logo">
							<img src="https://ranchovalencia.com/wp-content/uploads/2020/08/FTG_FiveStarRatingLogo_2020_GoldPMS872_HOTEL.png" alt="2020 Forbes Travel Guide Hotel Five Star Logo">
						</div>

											<div class="footer-logo">
							<img src="https://ranchovalencia.com/wp-content/uploads/2019/12/RelaisChateaux-Logo.png" alt="RelaisChateaux-Logo">
						</div>

											<div class="footer-logo">
							<img src="https://ranchovalencia.com/wp-content/uploads/2019/12/USNews-BestHotels-Logo.png" alt="USNews-BestHotels-Logo">
						</div>

											<div class="footer-logo">
							<img src="https://ranchovalencia.com/wp-content/uploads/2019/12/AAA-FiveDiamond-Logo.png" alt="AAA-FiveDiamond-Logo">
						</div>

											<div class="footer-logo">
							<img src="https://ranchovalencia.com/wp-content/uploads/2019/12/ta-travelers-choice-logo-e1576607819334-1.png" alt="TripAdvisor Travelers Choice 2017 Winner Logo Rancho Valencia Resort">
						</div>

											<div class="footer-logo">
							<img src="https://ranchovalencia.com/wp-content/uploads/2019/12/TA-Excellence-2017.png" alt="TA-Excellence-2017">
						</div>



			</div>


	</div>
</footer>



<script src="menu.js"></script>

</body>
</html>
