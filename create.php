<?php
include "connction.php";
$sql = "CREATE DATABASE IF NOT EXISTS web";
$resul=mysqli_query($conn,$sql);
if($resul)
{
    echo "data base created successfully";
    echo "<br>";
}
else{
    die("data base not created ".mysqli_connect_error());
}

mysqli_select_db($conn,"web");

$sql = "CREATE TABLE IF NOT EXISTS subjectt (
  si_no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  email VARCHAR(30) NOT NULL,
  phone INT(30) NOT NULL
)";

 $resul=mysqli_query($conn,$sql);

 if($resul)
 {
    echo "table created successfully";
    echo "<br>";
}
else{
    die("table not created ".mysqli_connect_error());
}


if(isset($_POST["submit"]))
{
  $name=$_POST["name"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];

  $sql = "INSERT INTO subjectt (name,email,phone) values ('$name','$email','$phone')";
  $result=mysqli_query($conn,$sql);
  if($result)
  {
    header('location:display.php');//sent to display file
  }
  else
  {
    die("values are not incerted".mysqli_connect_error());
  }
}
?>