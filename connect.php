<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "explorecalifornia";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";
 ?>
