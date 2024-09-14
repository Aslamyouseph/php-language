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
$sql="CREATE TABLE s4bca (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY , name VARCHAR (30),email VARCHAR(50), phone INT(10))";

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
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $sql="INSERT INTO s4bca (name,email,phone) VALUES ('$name','$email','$phone')";

}
if(mysqli_query($connect,$sql))//is used to execute the sql querys 
{
    echo "new recored inserted  ";
}
else
{
    echo "ERROR : ".mysqli_error($connect);// this funtion is used to identify what is the problem 
    echo "<br>";
    echo "<br>";
    echo "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
      NAME: <input name="name" type="text" /><br /><br />
      EMAIL: <input name="email" type="text" /><br /><br />
      <br /><br />
      PHONE: <input name="phone" type="number" /><br /><br />
      <input name="submitt" type="submit" value="submit" />
    </form>
</body>
</html>