<?php
  session_start();

  include("connection.php");
  include("functions.php");
 

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
      //something was posted
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $birthday = $_POST['birthday'];
      $gender = $_POST['gender'];

      if(!empty($firstName) && !empty($lastName) && !empty($username) && !empty($password) && !is_numeric($username) && !empty($birthday) && !empty($gender))
      {

          //save to database
          $user_id = random_num(20);
          $query = "insert into signup_details (user_id,firstName, lastName, username, password, birthday, gender) values ('$user_id','$firstName', '$lastName', '$username','$password', '$birthday', '$gender')";

          mysqli_query($con, $query);

          header("Location: login.php");
          die;
      }else
      {
          echo "Please enter some valid information!";
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Hotel, Room, Vacation, Signup">
    <title>Hotel Beachside Escape | Sign-up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Spline Sans' rel='stylesheet'>
    
</head>
<body>
    <div class="bg">
        
        <div class="menubar">
            <a href="home.html">
                <img src="images/favicon.png" alt="Hotel Beachside Escape Logo">
            </a>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="rooms.html">Room</a></li>
                <li><a href="media.html">Media</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>

        <div class="scontainer">
            <div class="sTitle">Signup</div>
                <form action="signup.php" method="post">
                    <div class="sdetails">
                        <div class="sInput-box">
                            <input type="text" placeholder="First Name" name="firstName" required>
                            <input type="text" placeholder="Last Name" name="lastName" required>
                            <input type="text" placeholder="Username" name="username"required>
                            <input type="text" placeholder="Password" name="password" required>
                        </div>
                    </div>
                        
                        <div class="sBirthday">
                            <label for="birthday">Birthday:</label>
                            <input type="date" id="birthday" name="birthday">
                        </div>
                          
                          <div class="sGender"></div>
                          <div class="sGender-dropdown">
                            <label for="gender">Gender:</label>
                            <select id="gender" name="gender">
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                                <option value="O">Other</option>
                            </select>
                          </div> 

                          <p class="termsNprivacy">By creating an account you agree to our <a href="terms_and_cond.php">Terms & Conditions.</a></p>
                          <button type="submit" class="sCreateAcctBtn">CREATE ACCOUNT</button>
                          <p class="existingAcc">Already have an account? <a href="login.php">Login.</a></p>
                </form>        
        </div>
</body>
</html>