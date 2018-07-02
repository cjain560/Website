<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "f20160250db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$First_Name=$_POST['First_Name'];
$Last_Name=$_POST['Last_Name'];
$address=$_POST['address'];
$age=$_POST['age'];
$city=$_POST['city'];
$Number_of_Cars=$_POST['Number_of_Cars'];
$Mobile_Number=$_POST['Mobile_Number'];

$sql = "INSERT INTO Users
(First_Name, Last_Name, Address, Age, City, Number_of_Cars, Mobile_Number)
VALUES ('$First_Name','$Last_Name','$address','$age','$city',
'$Number_of_Cars','$Mobile_Number')";

if ($conn->query($sql) === TRUE) {
    
    
  		header("location: welcome.php");
	

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>