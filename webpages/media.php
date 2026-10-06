<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Hotel, Room, Vacation, Signup">
        <title>Hotel Beachside Escape | Media</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/x-icon" href="images/favicon.png">
    </head>
<body class="media-gray-bg">
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
                <li><a href="media.php"><b>Media</b></a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </div>
    </div>



    <div class="hp-images-container">
        <div class="hp-images"><img src="images/hp_media1.webp" alt=""></div><br>
        <div class="hp-images"><img src="images/hp_media2_.webp" alt=""></div><br>
        <div class="hp-images"><img src="images/hp_media3.webp" alt=""></div><br>
    </div>

    <div class="media-box1">
        <h1>Dive into Tranquility: Experience Our Pool Oasis Surrounded by Nature's Beauty</h1>
        <p>Awaken to the beauty of Beachside Escape's tranquil pool, seamlessly merging with nature, inviting a serene morning embrace. <br>
           Renowned for coastal-inspired design.</p>
        <a href="read1.html">
            <button class="readmore-button">Read More</button>
        </a>
    </div><br>
    
    <div class="media-box2">
        <h1>Culinary Delights: A Gourmet Journey Through the Exquisite Flavors of Our Hotel's Signature Food</h1>
        <p>Embark on a sunrise culinary odyssey at Beachside Escape, where each plate narrates a tale of exquisite flavors. Our Michelin-starred <br>
           chef curates seasonal menus, showcasing local ingredients.</p>
        <a href="read2.html">
            <button class="readmore-button">Read More</button>
        </a>
    </div><br>
    
    <div class="media-box3">
        <h1>Seaside Serenity: Unwind in Style with Our Luxurious Hotel Rooms Offering Stunning Beach Views</h1>
        <p>At Beachside Escape, rooms unveil coastal luxury stories. Imagine waking up in elegant retreats where each window frames a captivating <br>
           sunrise narrative. Known for meticulous details, adorned with curated local artwork.</p>
        <a href="read3.html">
            <button class="readmore-button">Read More</button>
        </a>
    </div><br>
    
    




    <div class="hp-images-container">
        <div class="hp-images"><img src="images/hp_media1.webp" alt="" onclick="showPopup('img1')"></div><br>
        <div class="hp-images"><img src="images/hp_media2_.webp" alt="" onclick="showPopup('img2')"></div><br>
        <div class="hp-images"><img src="images/hp_media3.webp" alt="" onclick="showPopup('img3')"></div><br>
    </div>
    
    <div class="hp-images-container">
        <div class="hp-images"><img src="images/hp_media1.webp" alt="" onclick="showPopup('img1')"></div><br>
        <div class="hp-images"><img src="images/hp_media2_.webp" alt="" onclick="showPopup('img2')"></div><br>
        <div class="hp-images"><img src="images/hp_media3.webp" alt="" onclick="showPopup('img3')"></div><br>
    </div>
    
    <div id="img1" class="popup" onclick="hidePopup('img1')">
        <span class="close-button" onclick="hidePopup('img1')">&times;</span>
        <img src="images/hp_media1.webp" alt="">
    </div>
    
    <div id="img2" class="popup" onclick="hidePopup('img2')">
        <span class="close-button" onclick="hidePopup('img2')">&times;</span>
        <img src="images/hp_media2_.webp" alt="">
    </div>
    
    <div id="img3" class="popup" onclick="hidePopup('img3')">
        <span class="close-button" onclick="hidePopup('img3')">&times;</span>
        <img src="images/hp_media3.webp" alt="">
    </div>
    
    <script>
        function showPopup(id) {
            document.getElementById(id).classList.add('active');
        }
    
        function hidePopup(id) {
            document.getElementById(id).classList.remove('active');
        }
    </script>
</body>
</html>