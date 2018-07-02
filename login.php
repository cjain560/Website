<?php
$servername = "localhost";
$username = "root";
$passsword = "mysql";
$dbname = "loginprac";


$conn = new mysqli($servername, $username, $passsword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$username = $password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(empty(trim($_POST["username"]))){
		$username_err = 'Username cannot be empty.';
	}
	else{
		$username = trim($_POST["username"]);
	}

	if(empty(trim($_POST['password']))){
        $password_err = 'Password cannot be empty.';
    } 
    else{
        $password = trim($_POST['password']);
    }

    if(empty($username_err) && empty($password_err)){
    	$sql = "SELECT username, password FROM Users WHERE username = ?";

    	if($stmt = $conn->prepare($sql)){
    		$stmt->bind_param("s", $param_username);
    		$param_username = $username;

    		 if($stmt->execute()){
    		 	$stmt->store_result();

    		 	if($stmt->num_rows == 1){
    		 		$stmt->bind_result($username, $hashed_password);

    		 		if($stmt->fetch()){
    		 			if(password_verify($password, $hashed_password)){
    		 				session_start();
                            $_SESSION['username'] = $username;      
                            header("location: welcome.php");
    		 			}
    		 			else{
    		 				$password_err = 'The password you entered was not valid.';
    		 			}
    		 		}
    		 	}
    		 	else{
    		 		$username_err = 'No account found with that username.';
    		 	}
    		 }
    		 else{
                echo "Something went wrong. Please try again later.";
    	}
    }
     $stmt->close();
 }
 	$conn->close();
}
?>

<html lang="en">
  <head>

    <title>Log in</title>


    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="signup.css">
  </head>

  <body class="text-center" style="background-color: #FFFFFF">
    <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <img class="mb-4" src="WhatsApp Image 2018-04-21 at 12.56.11.jpeg" alt="" width="200" height="200">
      <h1 class="h3 mb-3 font-weight-normal">Log in for booking your parkings easily !</h1>

 <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
      <label for="inputUsername" class="sr-only">Username</label>
      <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" value="<?php echo $username; ?>" required autofocus>
      <span class="help-block" style="color:#cc3300"><?php echo $username_err; ?></span>
 </div>
      
 <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" value="<?php echo $password; ?>" required>
      <span class="help-block" style="color:#cc3300"><?php echo $password_err; ?></span>
 </div>
      

 

 <div class="yeah">  <button class="btn btn-lg btn-dark btn-block" type="submit">Login</button>
 </div>


 	<p style="color: #000000">Don't have an account? <a href="register.php">Sign up here.</a></p>
   <?php
echo "<p>Copyright &copy; 2018-" . date("Y") . " Park.Le</p>";
?>

    </form>
  </body>
</html>
