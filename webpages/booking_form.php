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
    <title>Hotel Beachside Escape | Booking Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Spline Sans' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bform-bg">
    
    <div class="booking-form-box">
        <div class="calendar">
            <h1 class="book-form-text">Booking Form</h1>
            <form method="post" action="booking_summary.php">
                <!-- Your existing form content -->
                <label for="checkInDate">Check-in Date:</label>
                <input type="date" id="checkInDate" name="checkInDate" required>
        
                <label for="checkOutDate" class="form-label">Check-out Date:</label>
                <input type="date" id="checkOutDate" name="checkOutDate" required>
                
                <br>
                <label for="room">Room Type:</label>
                <select id="room" name="Room" class="room-type">
                    <option value="Standard Room 1">Standard Room 1</option>
                    <option value="Standard Room 2">Standard Room 2</option>
                </select>
                
                <br>
                <div class="person-type1">
                    <label for="adults">Adults:</label>
                    <input type="text" placeholder="Enter Number of Adults" name="Adults" required>
                </div>

                <div class="person-type2">
                    <label for="children">Children:</label>
                    <input type="text" placeholder="Enter Number of Children" name="Children" required>
                </div>

                <div class="booking-submit">
                    <button type="submit" class="button">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
