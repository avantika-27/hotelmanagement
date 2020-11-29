<?php 
  //creating connection to database
$con=mysqli_connect("localhost","root","","hotel") or die(mysqli_error());
  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Firstname = $con->real_escape_string($_POST['firstname']);
$Lastname = $con->real_escape_string($_POST['lastname']);
$Email = $con->real_escape_string($_POST['Email']);
$Phone = $con->real_escape_string($_POST['phone']);
$City= $con->real_escape_string($_POST['city']);
$Country= $con->real_escape_string($_POST['country']);
$Arrivaldate= $con->real_escape_string($_POST['arrivaldate']);
$Departuredate= $con->real_escape_string($_POST['departuredate']);
$NumberOfGuests= $con->real_escape_string($_POST['numberofguests']);
$NumberOfRooms= $con->real_escape_string($_POST['numberofrooms']);
$Suite= $con->real_escape_string($_POST['suite']);
$Mode = $con->real_escape_string($_POST['mode']);
  //query to insert the variable data into the database
$sql="INSERT INTO booking (firstname, lastname, Email, phone, city, country, arrivaldate, departuredate, numberofguests, numberofrooms,suite,mode)VALUES ('".$Firstname."','".$Lastname."','".$Email."','".$Phone."','".$City."','".$Country."','".$Arrivaldate."','".$Departuredate."', '".$NumberOfGuests."','".$NumberOfRooms."','".$Suite."','".$Mode."')";      

if(!$result = $con->query($sql)){
    die('Error occured [' . $con->error . ']');
}
else{
  echo '<script>alert("Your Booking is successful")</script>';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>Booking of Rooms</title>
  	      <link rel="stylesheet" type="text/css" href="king.css">
          <link rel="stylesheet" type="text/css" href="style.css">
          <link rel="stylesheet" type="text/css" href="queen.css">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
      <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <body>
      
      <div class="header">
        <div id="myNav" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="overlay-content">
            <a href="home.php">About</a>
            <a href="Room.html">Rooms</a>
            <a href="gallery.html">Gallery</a>
            <a href="explore.html">Explore</a>
            <a href="Location.html">Location</a>
            <a href="Contact.php">Contact Us & Feedback</a>
            <a href="cancel.php">Request for Reservation Cancellation</a>
    <a href="login.php">Admin</a>
          </div>
        </div>
        <span style="font-size:30px;cursor:pointer;padding-left: 30px; " onclick="openNav()" >&#9776; Menu</span>
        <div class="logo">
          <center><a href="home.html"><img src="logo1.png" alt="The Hotel Logo" width="200px" height="130px" ></a></center>
        </div>
        </div>
       <div class="pic">
         <img src="a3.jpg" height="90%" width="60%" style="float: right;">
       </div> 
      <div class="rohead">
        <img src="king.jpg" alt="Deluxroom Background" height="50%" width="100%" >
        <div class ="deluxecontent">
            <h1>
              <div class="h1">
            King Suite
            </div>
            </h1>
            <div class="header_bar"></div>
            <br>
            <br>
          <p class="subheading"><u>Room description </u></p>
    <div class="roomdes">
      <p>The King Suite is every bit as impressive as its name suggests. Encompassing an area 
        of 140 Sq Mt (the size of a medium-sized apartment), this suite features a luxurious bedroom, 
        a vast living area with an 8-seater table, a bathroom with a Jacuzzi and a walk-in rain 
        shower, a guest powder room and a separate walk-in wardrobe. Every room in the suite comes with a
         view of the pool. The suite also opens out onto private lawns that are perfect to welcome soft
          mornings and balmy evenings</p>
    </div>
      
      <div class="subheading"><p><u>Amenities</u></p>
      </div>
      
      <div class="roomdes">
        <ul class="fa-ul">
          <li><i class="fa-li fa fa-plane fa-lg"></i>Airport Pick Up</li>
          <br>
          <li><i class="fa-li fa fa-wifi fa-lg"></i>24*7 WiFi</li>
          <br>
          <li><i class="fa-li fa fa-baby-carriage fa-lg"></i>Baby-Carriage Provided on the Premises</li>
          <br>
          <li><i class="fa-li fa fa-shower fa-lg"></i>Modern Shower</li>
          <br>
          <li><i class="fa-li fa fa-concierge-bell fa-lg"></i>Room Service</li>
          <br>
          <li><i class="fa-li fa fa-user fa-lg"></i>24- hour Butler service</li>
          <br>
          <li><i class="fa-li fa fa-bath fa-lg"></i>Luxurious Bathtub</li>
          <br>
          <li><i class="fa-li fa fa-television fa-lg"></i>Television</li>
          <br>
          <li><i class="fa-li fa fa-hot-tub fa-lg"></i>Jacuzzi</li>
          <br>
          <li><i class="fa-li fa fa-bed fa-lg"></i>1 King Bed</li>
          <br>
          <li><i class="fa-li fa fa-beer fa-lg"></i>Mini Bar</li>
          <br>
          <li><i class="fa-li fa fa-swimming-pool fa-lg"></i>Swimming-Pool</li>
          <br>
          <li><i class="fa-li fa fa-spa fa-lg"></i>Spa</li>
          <br>
          <li><i class="fa-li fa fa-smoking-ban fa-lg"></i>Smoking Not Allowed</li>
          <br>
          <li><i class="fa-li fa fa-parking fa-lg"></i>Free Parking</li>
          <br>
        </ul>
      </div>
    <br>
    <br>
    <div class="holder">
    <div class="fix">
      <button id="myBtn" class="book"><b>Book Now!</b></button>
    </div>
    </div>
</div>
      </div>	
<div class="slideshow-containerr">

  <div class="mySlidess fadee">
    <div class="numbertexts"></div>
    <img src="k1.jpg" style="width:100%" >
  </div>

  <div class="mySlidess fadee">
    <div class="numbertexts"></div>
    <img src="k2.jpg" style="width:100%">
  </div>

  <div class="mySlidess fadee">
    <div class="numbertexts"></div>
    <img src="k3.jpg" style="width:100%">
  </div>
  
  <div class="mySlidess fadee">
    <div class="numbertexts"></div>
    <img src="k4.jpeg" style="width:100%">
  </div>
  <div class="mySlidess fadee">
    <div class="numbertexts"></div>
    <img src="k5.jpg" style="width:100%">
  </div>

  <div class="mySlidess fadee">
    <div class="numbertexts"></div>
    <img src="k6.jpg" style="width:100%">
  </div>
  
  <div class="mySlidess fadee">
    <div class="numbertexts"></div>
    <img src="k7.jpg" style="width:100%">
  </div>
  <div class="mySlidess fadee">
    <div class="numbertexts"></div>
    <img src="k8.jpg" style="width:100%">
  </div>

  <div class="mySlidess fadee">
    <div class="numbertexts"></div>
    <img src="k9.jpg" style="width:100%">
  </div>
  
  <div class="mySlidess fadee">
    <div class="numbertexts"></div>
    <img src="k10.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dott" onclick="currentSlide(1)"></span>
  <span class="dott" onclick="currentSlide(2)"></span>
  <span class="dott" onclick="currentSlide(3)"></span>
  <span class="dott" onclick="currentSlide(4)"></span>
  <span class="dott" onclick="currentSlide(5)"></span>
  <span class="dott" onclick="currentSlide(6)"></span>
  <span class="dott" onclick="currentSlide(7)"></span>
  <span class="dott" onclick="currentSlide(8)"></span>
  <span class="dott" onclick="currentSlide(9)"></span>
  <span class="dott" onclick="currentSlide(10)"></span>

</div>
<div class="footer">
  <footer class="w3-padding-32 w3-black w3-center w3-margin-top">
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
</div>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
      <form class="form"  method="POST">
         <fieldset>
          <legend class="details">Personal Details:</legend>
          <label for="fname">Firstname: </label><input type ="text" name="firstname" id="fname" required placeholder="Your firstname" pattern="[a-zA-Z]{1,}" title="Enter valid first name">
    <br>
    <br>
                <label for="lname">Lastname: </label><input type ="text" name="lastname" id="lname" required placeholder="Your lastname" pattern="[a-zA-Z]{1,}" title="Enter valid last name">
    <br>
    <br>
          <label for="email">Email: </label><input type="text" name="Email" id="email" required placeholder="Your email" pattern="[a-z1-9]{3,}@[a-z]{3,}[.]{1}[a-z]{2,}" title="Enter a valid email address">
    <br>
    <br>
          <label for="phone">Phone: </label><input type="tel" name="phone" required placeholder="Enter your phone number" pattern="[0-9]{10}" title="Enter a phone number in this format: #### ### ###">
    <br>
    <br>          
                <label for="city">City: </label><input type="text" id="city" style="padding: 8px; padding-right:30px;" name="city" required placeholder="Enter the  city" >
  
          <label for="country">Country: </label><select id="country" style="padding: 10px; padding-right:30px;" name="country" required>
            <option value="IND">IND </option>
            <option value="UK">UK</option>
            <option value="US">US</option>
            <option value="SG">SG</option>
          </select>
        </fieldset>
    <br>
    <br>
        <fieldset>
          <legend class="details">Booking Details: </legend>
          <label for="arrivaldate">Arrivaldate: </label><input id="arrivaldate" style="padding: 7px;" type="date" name="arrivaldate" min="2020-11-15">
          <label for="departuredate">Departuredate: </label><input id="departuredate" style="padding: 7px;padding-right:30px;" type="date" name="departuredate" min="2020-11-15">
          <br>
          <br>
          <label for="numberofguests">NumberOfGuests: </label><input id="NumberOfGuests"style="padding: 7px; padding-right:30px;" type="number" name="numberofguests" min="1" max="7" required>
          <br>
          <br>
          <label for="suite">Suite Type: </label><select id="suite" style="padding: 7px;padding-right:30px;" name="suite" required>
            <option value="Deluxe">Deluxe</option>
            <option value="Deluxe">Deluxe 1</option>
            <option value="Deluxe">Deluxe 2</option>
            <option value="Queen">Queen</option>
            <option value="Queen">Queen 1</option>
            <option value="Queen">Queen  2</option>
            <option value="King">King</option>
          </select>
      <br>
      <br>
          <label for="numberofrooms">NumberOfRooms: </label><input id="NumberOfRooms"style="padding: 7px;" type="number" name="numberofrooms" min="1" max="6" required>
          <br>
          <br>
          <label for="mode">Mode of Payment: </label><select id="mode" style="padding: 10px; padding-right:30px;" name="mode" required>
            <option value="0">Cash/Cheque On Arrival</option>
            <option value="1">Online Payment</option>
          </select>
          <br>
          <br>
          
        </fieldset>
        <div id="Display" style="display:none; padding:10px">
        <div class="col-50">
            <h3><b>Payment<b></h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" require><br>
            <br>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"require><br>
            <br>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September"require>
            <br>
            <br>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018"require><br>
                <br>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="password" id="cvv" name="cvv" placeholder="352" require><br>
                <br>
              </div>
            </div>
          </div>
          
        </div>
        <center><button type="submit" name="submit" class="book">Submit</button></center>
      
          </fieldset>
      </form>
    </div>
</div>
<script src="menu.js"></script>
    <script>
      document.getElementById('mode').addEventListener('change', function () {
    var style = this.value == 1 ? 'block' : 'none';
    document.getElementById('Display').style.display = style;
});
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    </script>
        <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlidess");
  var dots = document.getElementsByClassName("dott");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>



