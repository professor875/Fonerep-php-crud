<?php
require_once ('./controllers/conn.php');

$name = $_POST['name'];
$grade = $_POST['grade'];

if($name != "" && $grade != ""){
    $sql = "INSERT INTO users (`name`, `grade`) VALUES ('$name', '$grade')";
    if (mysqli_query($conn, $sql)) {
        header("location: index.php");
    } else {
        echo "Something went wrong. Please try again later.";
    }
}else{
    echo "Name, Class and Marks cannot be empty!";
}


//
//// Get form data
//$name = $_POST['name'];
//$grade = $_POST['grade'];
//
//// Prepare and bind
//$stmt = $conn->prepare("INSERT INTO students (name, grade) VALUES (?, ?)");
//$stmt->bind_param("ss", $name, $grade);
//
//// Execute the statement
//if ($stmt->execute()) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $stmt->error;
//}
//
//// Close the statement and connection
//$stmt->close();
//$conn->close();
//