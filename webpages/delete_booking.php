<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_booking'])) {
    // Perform the deletion here
    // Assuming you have a table named 'bookings' to store booking details

    // Replace 'bookings' with your actual table name
    $query = "DELETE FROM bookings WHERE 
              checkInDate = '" . $_SESSION['checkInDate'] . "' AND
              checkOutDate = '" . $_SESSION['checkOutDate'] . "' AND
              roomType = '" . $_SESSION['roomType'] . "' AND
              numberOfAdults = " . $_SESSION['numberOfAdults'] . " AND
              numberOfChildren = " . $_SESSION['numberOfChildren'] . " AND
              totalAmount = " . $_SESSION['totalAmount'];

    $result = mysqli_query($con, $query);

    if ($result) {
        // Redirect to delete_success.php with a success flag
        header("Location: delete_success.php?success=true");
        exit();
    } else {
        // Redirect to delete_success.php with a failure flag
        header("Location: delete_success.php?success=false");
        exit();
    }
}
?>