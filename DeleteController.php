<?php
require_once "./controllers/conn.php";
$id = $_GET["id"];
$query = "DELETE FROM users WHERE id = '$id'";
if (mysqli_query($conn, $query)) {
    header("location: index.php");
} else {
    echo "Something went wrong. Please try again later.";
}