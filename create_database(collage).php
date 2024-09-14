<?php
include "connect_database(collage).php";


if(isset($_POST["submit"]))
{
  $name=$_POST["name"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];

  $sql = "INSERT INTO crud (name,email,phone) values ('$name','$email','$phone')";
  $result=mysqli_query($connection,$sql);
  if($result)
  {
    header('location:display_database(collage).php');//sent to display file
  }
  else
  {
    die(mysqli_error($connection));
  }
}

?>