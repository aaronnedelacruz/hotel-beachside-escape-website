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
    <title>Hotel Beachside Escape | About</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
</head>
<body class="about-bg">
    <div>
        
        <div class="menubar">
            <div class="menubar-box">
            </div>

            <a href="home.php">
                <img src="images/favicon.png" alt="Hotel Beachside Escape Logo">
            </a>
            
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="rooms.php">Room</a></li>
                <li><a href="media.php">Media</a></li>
                <li><a href="about.php"><b>About</b></a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </div>

        <div class="about-intro">
            <h1>About Our Hotel</h1>
            <p>Welcome to Hotel Beachside Escape, where every moment is crafted to be an extraordinary escape into luxury and comfort. <br>
               From the moment you step through our doors, you are embraced by a world of sophistication and warmth. Our commitment to <br>
               impeccable service, elegant accommodations, and a host of amenities ensures that your stay with us is not just a visit <br>
               but a memorable experience. We invite you to unwind, indulge, and create lasting memories in the heart of our hospitality.
            </p>
            <div class=about-extend>
                <a href="contact.php">Contact Us</a>
                <a href="images.php">Image References</a>
            </div>
        </div>

        <div class="about-content-wrapper">
            <div class="about-content1">
                <img src="images/dining-icon.png" alt="Dining Room Icon" class="icon-center"><br><br>
                Delicious Dining <br><br>
                Enjoy tasty meals at Hotel Beachside Escape's restaurants. From fancy to casual, our food options cater to all tastes, promising a memorable dining experience.
            </div>

            <div class="about-content2">
                <img src="images/relaxation-icon.png" alt="Dining Room Icon" class="icon-center"><br><br>
                Fun & Relaxation <br><br>
                Have a good time in our facilities—pool, spa, and fitness center. Hotel Beachside Escape is the place to unwind and have fun, making sure every guest has a great time.
            </div>

            <div class="about-content3">
                <img src="images/bed-icon.png" alt="Dining Room Icon" class="icon-center"><br><br>
                Comfy Rooms <br><br>
                Feel at home in Hotel Beachside Escape's rooms and suites. With stylish decor and modern amenities, our rooms offer a peaceful retreat for a memorable stay.
            </div>
        </div>

        

        
        
    </div>
</body>
</html>

