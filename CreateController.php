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
