<?php

$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "loginprac";


$conn = new mysqli($servername,$username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE Users (
			id int not null primary key auto_increment,
			username varchar(50) not null unique,
			password varchar(255) not null,
			created_at DATETIME default current_timestamp
		)";


if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
