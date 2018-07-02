<?php
$servername = "localhost";
$username = "root";
$password = "mysql";


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed, please try again later: " . $conn->connect_error);
} 


$sql = "CREATE DATABASE f20160250db";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully. Congrats";
} else {
    echo "Error creating database, please try again. ->" . $conn->error;
}

$conn->close();
?>