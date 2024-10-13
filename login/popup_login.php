<?php
$host="localhost";
$user="root";
$pass="";
$database="login";


$connection =  mysqli_connect($host,$user,$pass,$database);

if (!$connection) {
    die("Data base is not connected : please try again  " .mysqli_connect_error());
}


$email=$_POST["email"];
$password=$_POST["password"];

$sql = "INSERT INTO login_table (email,password) values ('$email','$password')";  

$result=mysqli_query($connection,$sql);
if (!$result) {
    die("Values are not inserted to the database: please try again " . mysqli_connect_error());
}

mysqli_close($connection);
?>


