<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "demo";

$conn = mysqli_connect($host, $user, $pass, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
