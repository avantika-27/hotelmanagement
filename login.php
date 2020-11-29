<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <title>Login Page</title> 
</head> 
  
<body > 
<div class="header">
  <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
      <a href="home.php">About</a>
      <a href="Room.html">Rooms</a>
      <a href="image.html">Gallery</a>
      <a href="explore.html">Explore</a>
    <a href="Location.html">Location</a>
    <a href="Contact.php">Contact Us & Feedback</a>
    <a href="cancel.php">Request for Reservation Cancellation</a>
    <a href="login.php">Admin</a>
    </div>
  </div>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()" >&#9776; Menu</span>
  <div class="logo">
    <center><a href="home.html"><img src="logo1.png" alt="The Hotel Logo" width="200px" height="130px" ></a></center>
  </div>
  </div>
<div class="b">
    <form action="validate.php" method="post"> 
        <div class="login-box"> 
            <h1>Login</h1> 
  
            <div class="textbox"> 
                <i class="fa fa-user" aria-hidden="true"></i> 
                <input type="text" placeholder="Adminname"
                         name="adminname" value=""> 
            </div> 
  
            <div class="textbox"> 
                <i class="fa fa-lock" aria-hidden="true"></i> 
                <input type="password" placeholder="Password"
                         name="password" value=""> 
            </div> 
  
            <input class="button" type="submit"
                     name="login" value="Sign In"> 
        </div> 
    </form> 
</div>

</body>
    <script src="menu.js"></script>

  
</html> 