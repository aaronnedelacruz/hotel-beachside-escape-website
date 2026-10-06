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
    <title>Hotel Beachside Escape | Booking Deletion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
</head>
<body class="about-bg">
    <div class="delete-booking">
        <?php
        // Check if success flag is set
        if (isset($_GET['success'])) {
            $success = $_GET['success'];

            // Display success or failure message
            if ($success == "true") {
                echo "<h1>Booking Status</h1>";
                echo "<p>The previous booking was successfully deleted.</p>";
            } else {
                echo "<p>Failed to delete the booking. Please try again.</p>";
            }
        } else {
            // If success flag is not set, display an error message or handle accordingly
            echo "<p>An unexpected error occurred.</p>";
        }
        ?>

        <div class="d-home">
            <form action="home.php">
                <input type="submit" value="Go Home">
            </form>
        </div>

        <div class="d-bform">
            <form action="booking_form.php">    
                <input type="submit" value="Go to Booking Form">
            </form>
        </div>
    </div>

</body>
</html>
