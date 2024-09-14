<?php
$name="localhost";
$user="root";
$pass="";

$connect=mysqli_connect($name,$user,$pass);//create a connection to my_sqil server  
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
if(mysqli_query($connect,$sql))//is used to execute the sql querys 
{
    echo "Data bases is succesfully connected : ";
}
else
{
    echo "NO connected : ".mysqli_error($connect);// this funtion is used to identify what is the problem 
    echo "<br>";
    echo "<br>";
    echo "<br>";
}
mysqli_select_db($connect,"classroom");// change the defult data base for the connection 
$sql="CREATE TABLE s4bca (id INT(6) AUTO_INCREMENT PRIMARY KEY , name VARCHAR (30),email VARCHAR(50) phone INT(10))";

if(mysqli_query($connect,$sql))//is used to execute the sql querys 
{
    echo "s4bca table is createted  ";
}
else
{
    echo "NO created  : ".mysqli_error($connect);// this funtion is used to identify what is the problem 
    echo "<br>";
    echo "<br>";
    echo "<br>";
}
?>
