<?php

$con=mysqli_connect("localhost","root","","hotel") or die(mysqli_error());
$sql="select * from cancel";
$res=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    
    .displayyy{
        margin:30px;
    }
    table{
        border: 2px solid black;
    }
    tr{
        padding-right:20px;
    }
    .book{
background-image: url("buttonsbg.jpg");
font-family: "Times New Roman", Times, serif;
font-size: 18px;
padding: 10px;
height: 75px;
width : 150px;
outline: 1px solid white;
outline-offset: -5px;
text-decoration: none;

}
</style>
<body>
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
    <div class="displayyy">
   <center> <table>
                    <thread>
                        <tr>
                            <th>fname</th><th></th>
                            <th>lname</th><th></th>
                            <th>emailid</th><th></th>
                        </tr>
                    </thread>
        <?php 
        while ($row = mysqli_fetch_array($res)){ ?>
            <div class="table1">
                
                    <tbody>
                        <tr>
                            <td><?php echo $row['fname']; ?><td>
                            <td><?php echo $row['lname']; ?><td>
                            <td><?php echo $row['emailid']; ?><td>
                            
                        </tr>
                    </tbody>
        <?php } ?>

                </table></center>
        </div>
        
    </div> 
    
    <br>
<br><center>
<button onclick="document.location='deletion.php'" class="book">Proceed to delete</button></center>

    
    </body>
    <script src="menu.js"></script>
</html>