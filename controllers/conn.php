<?php
$servername = "localhost";
$username = "root";
$password = "root"; // Your MySQL password
$dbname = "php-crud"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}