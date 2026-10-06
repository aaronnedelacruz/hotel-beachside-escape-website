<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Hotel, Room, Vacation, Signup">
    <title>Hotel Beachside Escape | Rooms</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
</head>
<body class="rooms-gray-bg">
    <div>
        
        <div class="menubar">
            <div class="menubar-box">
            </div>

            <a href="home.php">
                <img src="images/favicon.png" alt="Hotel Beachside Escape Logo">
            </a>
            
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="rooms.php"><b>Room</b></a></li>
                <li><a href="media.php">Media</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </div>

        <div class="rooms-container">
            
            

            
            <h1 class="rooms-title">Our Rooms</h1>

            <div class="rooms-names">
                <div class="sr">
                    <img src="images/standard-1.jpg" alt="">
                    <h2>Standard Room 1</h2><br><br>
                    <p class="room-desc">Our Affordable Comfort Standard Room features a cozy queen-size bed with soft linens and a well-appointed private bathroom, offering you a 
                       peaceful and budget-friendly stay.</p>
                    <p class="room-price"><b>₱3500 / night</b></p>

                    <a href="checkin-details.html">
                        <a href="booking_form.php"><button class="booking-button">Book Now</button></a>
                    </a>
                </div>

                <div class="sr">
                    <img src="images/standard-2.jpg" alt="">
                    <h2>Standard Room 2</h2><br><br>
                    <p class="room-desc">Experience affordability and relaxation in our Twin Delight Standard Room, where you'll find two comfortable twin beds with cozy bedding, 
                       modern amenities in the private bathroom, and a tranquil ambiance for your stay.</p>
                    <p class="room-price"><b>₱4,000 / night</b></p>
                    
                    <a href="checkin-details.html">
                        <a href="booking_form.php"><button class="booking-button">Book Now</button></a>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>