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
    <meta name="keywords" content="Hotel, Room, Vacation, Login">
    <meta name="description" content="Experience urban comfort at its 
                                    finest in our centrally located hotel, 
                                    offering modern amenities and exceptional 
                                    service for a memorable stay.">
    <title>Hotel Beachside Escape | Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
</head>
<body class="about-bg">
    
    <div class="menubar">
            <a href="home.php">
                <img src="images/favicon.png" alt="Hotel Beachside Escape Logo">
            </a>
    </div>
    
    <div class="user-profile">
        <h1>Personal Profile</h1>
        <?php 
        echo "<strong>Name: </strong>" . $user_data['firstName'];
        echo "&nbsp;";
        echo $user_data['lastName'];
        echo "<br>";
        echo "<strong>Username: </strong>" . $user_data['username'];
        echo "<br>";
        echo "<strong>Birthdate: </strong>" . $user_data['birthday'];
        echo "<br>";
        echo "<strong>Gender: </strong>" . $user_data['gender'];
        echo "<br>";
        ?>

        <h1>Booking Details</h1>
        <?php 
        if (isset($_SESSION['checkInDate'])) {
            echo "<strong>Check-in: </strong>" . $_SESSION['checkInDate'] . "<br>";
        }
        if (isset($_SESSION['checkOutDate'])) {
            echo "<strong>Check-out: </strong>" . $_SESSION['checkOutDate'] . "<br>";
        }
        if (isset($_SESSION['roomType'])) {
            echo "<strong>Room: </strong>" . $_SESSION['roomType'] . "<br>";
        }
        if (isset($_SESSION['numberOfAdults'])) {
            echo "<strong>Adults: </strong>" . $_SESSION['numberOfAdults'] . "<br>";
        }
        if (isset($_SESSION['numberOfChildren'])) {
            echo "<strong>Children: </strong>" . $_SESSION['numberOfChildren'] . "<br>";
        }
        if (isset($_SESSION['totalAmount'])) {
            echo "<strong>Total Amount: </strong>P" . $_SESSION['totalAmount'] . "<br>";
        }
        if (isset($_SESSION['checkInDate']) && isset($_SESSION['checkOutDate'])) {
            $startDate = new DateTime($_SESSION['checkInDate']);
            $endDate = new DateTime($_SESSION['checkOutDate']);
            $interval = $startDate->diff($endDate);
            echo "<strong>Total Days: </strong>" . $interval->days . "<br>";
        }
        ?>


        <div class="home-link">
            <a href="booking_form.php">Edit</a>
        </div>
        <form method="post" action="delete_booking.php">
            <input type="submit" name="delete_booking" value="Delete Booking">
        </form>
        <br>

        <div class="logout-link">
            <a href="logout.php">Log Out</a>
        </div>

    </div>

</body>
</html>
