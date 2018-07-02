<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="iform.css">
</head>
<body style="background-color:#ffffff">
	<nav class="navbar navbar-expand-lg navbar sticky-top" style="background-color: #639ea4">
  <a class="navbar-brand" style="color:#000000" href="welcome.php">Park.<span style="color:#ff9933">Le</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" style="color:#000000" href="welcome.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:#000000" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:#000000" href="#">Our Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:#000000" href="#">Donate</a>
      </li>
      
</ul>
<form class="form-inline">
    <a href="logout.php" class="btn btn-danger"
">Sign Out of Your Account</a>
  </form>


</nav>



		<div class ="jumbotron" style="background-color:#ffff99">

      <div class="page-header">

			<h1 style="color:  #000066">Fill up your details so that we know YOU better !!</h1> </div>
			<p style="color:#000066">Don't worry, this is as easy as booking your parking with us ;)</p>
  
	</div>


	<form action="insert.php" method="post">
  
  <div class="form-group col-md-5">
    <label for="First_Name">First Name</label>
    <input type="text" class="form-control" id="First_Name" name="First_Name" placeholder="Lionel">
  </div>
  
  <div class="form-group col-md-5">
    <label for="Last_Name">Last name</label>
    <input type="text" class="form-control" id="Last_Name" name="Last_Name" placeholder="Messi">
  </div>
  
  <div class="form-group col-md-1">
  		<label for ="age"> Age </label>
  		<input type="number" class="form-control" id="age" name="age">
  	</div>

  <div class="form-group col-md-8">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" min="1" id="inputAddress" >
  </div>

  

    <div class="form-group col-md-3">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="inputCity">
    </div>


  <div class="form-group col-md-2">
      <label for ="Number_of_Cars"> Number Of Vehicles</label>
      <input type="number" class="form-control" id="Number_of_Cars" name="Number_of_Cars">
    </div>

    <div class="form-group col-md-3">
      <label for="mno">Mobile Number</label>
      <input type="text" class="form-control" name="Mobile_Number" id="Mobile_Number">
    </div>
  <br>
<div class="btnnn">
	<button type="submit" class="btn btn-dark btn-lg">Submit</button>

</div>
<br>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  

</form>
</body>
</html>