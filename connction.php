<?php
$host="localhost";
$user="root";
$pass="";
$conn = mysqli_connect($host,$user,$pass);
if(!$conn)
{
    die("data base is not connected ".mysqli_connect_error());
}
?>