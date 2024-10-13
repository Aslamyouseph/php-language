<?php
include 'connection.php';

if (isset($_POST['submit'])) {
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
  $address = mysqli_real_escape_string($conn, $_POST["address"]);

  $sql = "INSERT INTO demoform (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";
  $result = mysqli_query($conn, $sql);

  if (!$result) {
    die("Details are not inserted: " . mysqli_error($conn));
  } else {
    header('location:display.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="form_style.css">
</head>
<body>
  <form method="post">
    Name: <input type="text" name="name" id="name" required/><br/><br/>
    Email: <input type="email" name="email" id="email" required/><br/><br/>
    Phone: <input type="text" name="phone" id="phone" required/><br/><br/>
    Address: <input type="text" name="address" id="address" required/><br/><br/>
    <input type="submit" value="Submit" name="submit" />
  </form>
</body>
</html>
