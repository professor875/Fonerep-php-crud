<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "php-crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize input
    $name = htmlspecialchars(trim($_POST['name']));
    $grade = htmlspecialchars(trim($_POST['grade']));

    // Validate inputs
    if (empty($name) || empty($grade)) {
        die('Please fill in all required fields.');
    }

    // Prepare SQL and bind parameters
    $stmt = $conn->prepare(/** @lang text */ "INSERT INTO users (name, grade) VALUES (?, ?)");
    $stmt->bind_param("sss", $user, $email);

    // Execute the statement
    if ($stmt->execute()) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
