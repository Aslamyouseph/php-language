<?php
$host ="localhost";
$user="root";
$pass="";
$database="db1"; // databases name 

$connection =  mysqli_connect($host,$user,$pass,$database); // connecting to the database and storing this connection into a php varible 

if($connection)    // used to  check the data bases is suusessfully connected or not 
{
    echo "succesfully connected to databases : ";
}
else
{
    die("Not connected to databases : ");
}

$name = $_POST["name"];  //assing the form values(values taken from the data_bases.html ) into the php varible 
$email= $_POST["email"];
$phone = $_POST["phone"];

// contact is our table name 
$sql = "INSERT INTO contact (name,email,phone) values ('$name','$email','$phone')"; // inserting the data into the databases which data is taken from the form(dsata_bases.html ) and compete details stored into a php varible 
//mysqli_query() this funtion is used to exectute the mysql 
if(mysqli_query($connection,$sql))  // used to check the data is succesfully inserted to the databases or not 
{
    echo "Details sussesfully stored :";
}
else
{
    echo "Details not stored to databases : ";
}

mysqli_close($connection); // used to close our mysql
?>