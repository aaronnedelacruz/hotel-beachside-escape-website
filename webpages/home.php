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
    <title>Hotel Beachside Escape | Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Spline Sans' rel='stylesheet'>
    
</head>
<body>
    <div class="homebg">
        
        <div class="menubar">
            <a href="home.php">
                <img src="images/favicon.png" alt="Hotel Beachside Escape Logo">
            </a>
            <ul>
                <li><a href="home.php"><b>Home</b></a></li>
                <li><a href="rooms.php">Room</a></li>
                <li><a href="media.php">Media</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </div>

        <div class="homepage">
            <h1>Seaside Serenity: <br> Where Tranquility Meets Luxury</h1>
            <p>
                <i>Welcome to our coastal haven, where sun-kissed shores meet unparalleled luxury, <br>
                inviting you to experience a beachside escape like no other.</i>
            </p>
            <div>
                <a href="rooms.php">BOOK NOW</a>
            </div>
        </div>
        
    </div>