<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "f20160250db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE TABLE Support (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Name VARCHAR(30) NOT NULL,
City VARCHAR(30) NOT NULL,
Mobile_Number VARCHAR(20) NOT NULL,
Query VARCHAR(300) Not NULL,
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Support created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>