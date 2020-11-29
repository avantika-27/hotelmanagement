<?php 
  //creating connection to database
$con=mysqli_connect("localhost","root","","hotel") or die(mysqli_error());
  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['name']);
$Phone = $con->real_escape_string($_POST['contact']);
$Email = $con->real_escape_string($_POST['email']);
$subject = $con->real_escape_string($_POST['subject']);
$Message= $con->real_escape_string($_POST['message']);
  //query to insert the variable data into the database
$sql="INSERT INTO contactus (name,contact,email,subject, message) VALUES ('".$Name."','".$Phone."','".$Email."','".$subject."',  '".$Message."')";		
  //Execute the query and returning a message
if(!$result = $con->query($sql)){
	die('Error occured [' . $con->error . ']');
}
else{
    echo '<script>alert("Your contact information is saved successfully.")</script>';
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
	 <title>Contact Us</title>
	 <link rel="stylesheet" href="contact.css">
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>
<div id="myNav" class="overlay" >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a>
  <div class="overlay-content">
    <a href="home.php">About</a>
    <a href="Room.html">Rooms</a>
    <a href="image.html">Gallery</a>
    <a href="Location.html">Location</a>
	<a href="Contact.php">Contact Us & Feedback</a>
	<a href="cancel.php">Request for Reservation Cancellation</a>
    <a href="login.php">Admin</a>
  </div>
</div>
<span style="font-size:30px;cursor:pointer; margin-left: 20px; position: fixed; " onclick="openNav()" float:right; >&#9776; Menu</span>
<div class="logo" >
  <center><a href="#"><img src="logo.png" alt="The Hotel Logo" width="250px" height="250px"></a></center>
</div>
      <div class="containerr">
           <h1><b>Contact Us</b></h1>
           <p style="text-align:center;">Feel free to get in touch with us.</p>
		
			<div class="contact-box">
			     <div class="contact-left">
				    <h3>Send your request</h3>
					 <form class="form"  method="POST">
					    <div class="input-row">
						     <div class="username">
							     <label for="name">Name</label>
								 <input type="text" name="name" id="name" placeholder="Enter your name">
							 </div>
							  <div class="usercontact">
							      <label for="contact">Phone number</label>
								  <input type="text" name="contact" id="contact" placeholder="contact no." >
							 </div>
					    </div>
						
						<div class="input-row">
						     <div class="useremail">
							     <label for="email">Email</label>
								 <input type="text" name="email" id="email" placeholder="mail@example.com" >
							 </div>
							  <div class="usersubject">
							     <label for="subject">Subject</label>
								 <input type="text"  name="subject" id="subject" placeholder=" Feedback/Complaint/Other">
							 </div>
					    </div>
						<p class="usertext">
						    <label for="text">Message</label>
						     <textarea rows="5" name="message" placeholder="Write something to us" ></textarea>
						    <button type="submit" name="submit">SEND</button>
					</form>
				 </div>
				 
				 <div class="contact-right">
				    <h3>Reach us</h3>
				     <table>
					    <tr>
						    <td>Email</td>
							<td>hotelcontactus@gmail.com</td>
						</tr>	
						<tr>
						    <td>Phone</td>
							<td>022 25567349</td>
						</tr>	
						<tr>
						    <td>Address</td>
							<td>#211, Ground floor, 7th cross<br>
							XYZ road, Wadala<br>
							Mumbai 400034
							</td>
						</tr>	
					 </table>
				 </div>
	  </div>
	  <script src="menu.js"></script>
</body>
</html> 	  