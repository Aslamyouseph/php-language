<?php
$host="localhost";
$user="root";
$pass="";
$database="db2";


$connection =  mysqli_connect($host,$user,$pass,$database); // connecting to the database and storing this connection into a php varible 

if($connection)
{
    echo "succesfully connected : <br>";
    echo "<br>";

}
else
{
    die("not connected : ");
}
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];

$sql = "INSERT INTO contact2(name,email,phone) values ('$name','$email','$phone')";   //contact2 is the table name 

if(mysqli_query($connection,$sql))
{
    echo "details are succesfully connected : ";
}
else
{
    echo "details are not connected : ";
}
mysqli_close($connection);
?>