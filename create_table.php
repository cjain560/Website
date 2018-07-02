<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "f20160250db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE TABLE Users (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
First_Name VARCHAR(30) NOT NULL,
Last_Name VARCHAR(30) NOT NULL,
Address VARCHAR(30) NOT NULL,
Age INT UNSIGNED NOT NULL,
City VARCHAR(30) NOT NULL,
Number_of_Cars INT NOT NULL,
Mobile_Number VARCHAR(20) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table USERS created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>