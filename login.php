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

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from signup_details where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

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
    <title>Hotel Beachside Escape | Log-in</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Spline Sans' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    
</head>
<body>
    <div class="bg">
        
        <div class="menubar">
            <a href="home.html">
                <img src="images/favicon.png" alt="Hotel Beachside Escape Logo">
            </a>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="rooms.php">Room</a></li>
                <li><a href="media.php">Media</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="login.php"><b>Login</b></a></li>
            </ul>
        </div>
        

        
        <div class="login">
            <h1 class="title">Login</h1>

            <form action="login.php" method="post">
                <div class="input-box">
                    <input type="text" placeholder="Username" name="username" required>
                    <i class='bx bxs-user'></i>
               </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                
                <div class="remember-forgot">
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>

                <a href="forgot_pass.php">Forgot password?</a>
            </div>

                <div>
                    <button type="submit" class="button">LOGIN</button>
                </div>
            </form>

            

            

            <div class="signup">
                <p>Not a member? <a href="signup.php">Sign up</a></p>
            </div>
            
        </div>

        
    </div>
    
</body>
</html>