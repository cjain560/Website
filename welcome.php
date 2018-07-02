<?php

session_start();
 

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>x
</head>
<body style="background-color: #000000">
    <div class="page-header">
        <h1 style="color: #ffff00">Welcome to Park.Le !</h1>
    </div>
    <p>
        
        <a href="form.php" class="btn btn-primary">Enter your details</a>
        <a href ="upcoming.php" class="btn btn-primary">Upcoming events</a>
        <a href="Booking.php" class="btn btn-primary">Book your Parking</a>
        <a href="support.php" class="btn btn-primary">Support</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        
    </p>

</body>
</html>