<?php
$con=mysqli_connect("localhost","root","","hotel") or die(mysqli_error());
$sql="select * from booking";
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
    <table>
                    <thread>
                        <tr>
                            <th>firstname</th><th></th>
                            <th>lastname</th><th></th>
                            <th>Email</th><th></th>
                            <th>phone</th><th></th>
                            <th>city</th><th></th>
                            <th>country</th><th></th>
                            <th>arrivaldate</th><th></th>
                            <th>departuredate</th><th></th>
                            <th>numberofguests</th><th></th>
                            <th>numberofrooms</th><th></th>
                            <th>suite</th><th></th>
                            <th>mode</th>
                        </tr>
                    </thread>
        <?php 
        while ($row = mysqli_fetch_array($res)){ ?>
            <div class="table1">
                
                    <tbody>
                        <tr>
                            <td><?php echo $row['firstname']; ?><td>
                            <td><?php echo $row['lastname']; ?><td>
                            <td><?php echo $row['Email']; ?><td>
                            <td><?php echo $row['phone']; ?><td>
                            <td><?php echo $row['city']; ?><td>
                            <td><?php echo $row['country']; ?><td>
                            <td><?php echo $row['arrivaldate']; ?><td>
                            <td><?php echo $row['departuredate']; ?><td>
                            <td><?php echo $row['numberofguests']; ?><td>
                            <td><?php echo $row['numberofrooms']; ?><td>
                            <td><?php echo $row['suite']; ?><td>
                            <td><?php echo $row['mode']; ?><td>
                        </tr>
                    </tbody>
        <?php } ?>

                </table>
        </div>
        
    </div> 
    
    
    
    </body>
    <script src="menu.js"></script>
</html>