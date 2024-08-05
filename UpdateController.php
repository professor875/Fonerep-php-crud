<?php
require_once('./controllers/conn.php');

$name = $_POST['name'];
$grade = $_POST['grade'];

$sql = "UPDATE users SET `name`= '$name', `grade`= '$grade' WHERE id= " . $_GET["id"];
if (mysqli_query($conn, $sql)) {
    header("location: index.php");
} else {
    echo "Something went wrong. Please try again later.";
}
