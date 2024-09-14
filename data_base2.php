<?php
$host="localhost";
$user="root";
$pass="";
$database="db3";

$connect=mysqli_connect($host,$user,$pass,$database);
if($connect)
{
    echo "page is successfully connected to the database : ";
    echo "<br>";   
}
else{
    die("not connected : ");
}
$name=$_POST["name"];
$addres=$_POST["addres"];
$Phone=$_POST["phone"];

$sql="INSERT INTO contact3 (name,addres,phone) values('$name','$addres','$Phone')";

if (mysqli_query($connect,$sql))
{
    echo "Succesfully connected : ";
}
else{
    echo "Not connected :";
}
mysqli_close($connect);
?>