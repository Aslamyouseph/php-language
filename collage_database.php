<?php
$name="localhost";
$user="root";
$pass="";

$connect=mysqli_connect($name,$user,$pass);
if(!$connect)
{
    die("connection is fail : ");
}
else
{
    echo "Succesfully connected : <br>".mysqli_error($connect);
    echo "<br>";
    echo "<br>";
    echo "<br>";
}
$sql="CREATE DATABASE classroom";
if(mysqli_query($connect,$sql))
{
    echo "Data bases is succesfully connected : ";
}
else
{
    echo "NO connected : ".mysqli_error($connect);
    echo "<br>";
    echo "<br>";
    echo "<br>";
}
mysqli_select_db($connect,"classroom");
$sql="CREATE TABLE s4bca (id int(6) AUTO_INCREMENT PRIMARY KEY name VARCHAR (30),email VARCHAR(50) phone INT(10))"

?>