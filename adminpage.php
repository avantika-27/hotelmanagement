<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="di">
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
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
            <div class="logo">
                <center><a href="home.html"><img src="logo1.png" alt="The Hotel Logo" width="200px" height="130px"></a>
                </center>
            </div>
        </div>

        <div class="dis">
            <div class="a">
                <center>
                    <br><button onclick="document.location='allregistrations.php'" class="book"><b>See all the
                        Registrations<b></button>
                    <br>
                    <br>
                    <button onclick="document.location='reservationcancellation.php'" class="book"><b>See all the
                        
                        Cancellation Request<b></button>
                </center>
            </div>
        </div>
    </div>
    </div>
    <div class="footer">
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
                    <img src="https://ranchovalencia.com/wp-content/uploads/2020/08/FTG_FiveStarRatingLogo_2020_GoldPMS872_SPA.png"
                        alt="2020 Forbes Travel Guide Spa Five Star Logo">
                </div>

                <div class="footer-logo">
                    <img src="https://ranchovalencia.com/wp-content/uploads/2020/08/FTG_FiveStarRatingLogo_2020_GoldPMS872_HOTEL.png"
                        alt="2020 Forbes Travel Guide Hotel Five Star Logo">
                </div>

                <div class="footer-logo">
                    <img src="https://ranchovalencia.com/wp-content/uploads/2019/12/RelaisChateaux-Logo.png"
                        alt="RelaisChateaux-Logo">
                </div>

                <div class="footer-logo">
                    <img src="https://ranchovalencia.com/wp-content/uploads/2019/12/USNews-BestHotels-Logo.png"
                        alt="USNews-BestHotels-Logo">
                </div>

                <div class="footer-logo">
                    <img src="https://ranchovalencia.com/wp-content/uploads/2019/12/AAA-FiveDiamond-Logo.png"
                        alt="AAA-FiveDiamond-Logo">
                </div>

                <div class="footer-logo">
                    <img src="https://ranchovalencia.com/wp-content/uploads/2019/12/ta-travelers-choice-logo-e1576607819334-1.png"
                        alt="TripAdvisor Travelers Choice 2017 Winner Logo Rancho Valencia Resort">
                </div>

                <div class="footer-logo">
                    <img src="https://ranchovalencia.com/wp-content/uploads/2019/12/TA-Excellence-2017.png"
                        alt="TA-Excellence-2017">
                </div>



            </div>


    </div>
    </footer>

    </div>
</body>
<script src="menu.js"></script>
</html>