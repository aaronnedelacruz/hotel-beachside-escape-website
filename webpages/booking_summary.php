<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $checkInDate = $_POST['checkInDate'];
    $checkOutDate = $_POST['checkOutDate'];
    $roomType = $_POST['Room'];
    $numberOfAdults = $_POST['Adults'];
    $numberOfChildren = $_POST['Children'];

    // Validate input (e.g., check if numeric for adults and children)
    // Implement your validation logic here...

    // Check if the check-in and check-out dates are the same
    if ($checkInDate === $checkOutDate) {
        echo "<p class='error'>Invalid booking. Check-in and check-out dates cannot be the same.</p>";
        exit();
    }

    // Calculate total amount based on room type and number of nights
    $numberOfNights = calculateNumberOfNights($checkInDate, $checkOutDate);
    $totalAmount = calculateTotalAmount($roomType, $numberOfNights);

    // Store variables in the session
    $_SESSION['checkInDate'] = $checkInDate;
    $_SESSION['checkOutDate'] = $checkOutDate;
    $_SESSION['roomType'] = $roomType;
    $_SESSION['numberOfAdults'] = $numberOfAdults;
    $_SESSION['numberOfChildren'] = $numberOfChildren;
    $_SESSION['totalAmount'] = $totalAmount;

    // Get the user's ID from the session (modify as per your login system)
    $user_id = $_SESSION['user_id'];

    // Insert booking details into the database
    $insert_query = "INSERT INTO bookings (checkInDate, checkOutDate, roomType, numberOfAdults, numberOfChildren, totalAmount) 
                     VALUES ('$checkInDate', '$checkOutDate', '$roomType', '$numberOfAdults', '$numberOfChildren', '$totalAmount')";

    if (mysqli_query($con, $insert_query)) {
        // Display booking summary
        echo "<h2>Booking Summary</h2>";
        echo "<p>Check-in Date: $checkInDate</p>";
        echo "<p>Check-out Date: $checkOutDate</p>";
        echo "<p>Room Type: $roomType</p>";
        echo "<p>Number of Adults: $numberOfAdults</p>";
        echo "<p>Number of Children: $numberOfChildren</p>";
        // ... (other form fields)
        echo "<p>Total Amount: $totalAmount</p>";

        // Redirect to profile.php
        header("Location: profile.php");
        exit();
    } else {
        echo "Error: " . $insert_query . "<br>" . mysqli_error($con);
        exit();
    }
} else {
    // Redirect to the form if accessed directly without submitting
    header("Location: booking_form.php");
    exit();
}

// You need to implement the following functions
function calculateNumberOfNights($checkInDate, $checkOutDate) {
    // Implement the logic to calculate the number of nights
    $startDate = new DateTime($checkInDate);
    $endDate = new DateTime($checkOutDate);
    $interval = $startDate->diff($endDate);

    return $interval->days;
}

function calculateTotalAmount($roomType, $numberOfNights) {
    // Implement the logic to calculate the total amount based on room type and number of nights
    $standardRoom1Rate = 3500;
    $standardRoom2Rate = 4000;

    switch ($roomType) {
        case 'Standard Room 1':
            return $standardRoom1Rate * $numberOfNights;
        case 'Standard Room 2':
            return $standardRoom2Rate * $numberOfNights;
        // Add more cases for other room types if needed
        default:
            return 0; // Default to 0 if room type is not recognized
    }
}
?>
