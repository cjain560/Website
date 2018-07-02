<?php

$servername = "localhost";
$username = "root";
$password = "mysql";


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed, please try again later: " . $conn->connect_error);
} 


$sql = "CREATE DATABASE loginprac";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>