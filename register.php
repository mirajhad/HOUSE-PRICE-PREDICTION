<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/840b1ebd19.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Banglore Home Price Prediction</title>
</head>
<body>
    <form method="POST" action="register.php">
    <div class="container">
        <h1>WELCOME TO REGISTRATION PAGE</h1>
        <div class="box">
            <i class="fa fa-user"></i>
            <input type="text" name="username" id="username" placeholder="Enter your name">
        </div>

        <div class="box">
            <i class="fa fa-envelope-o"></i>
            <input type="email" name="email" id="email" placeholder="Enter your Email">
        </div>

       
        <div class="box">
            <i class="fa fa-key"></i>
            <input type="password" name="password" id="password" placeholder="Enter password">
        </div>
        <input class="btn" type="submit" name="submit" value="Register">
        <a style="text-decoration:none" href="login.php" class="btn">Login</a>
    </div>
</form>
</body>
</html>


<?php

include("config.php");

if($_POST['submit'])
{
	
	$username = $_POST['username'];
    $email = $_POST['email'];
	$password= $_POST['password'];

	$query=mysqli_query($con,"insert into registration (username,email,password) values('$username','$email','$password')");
if($query)
{
	echo "<script>alert('Successfully Registered. Now you can Login');</script>";
	
}
}

?>