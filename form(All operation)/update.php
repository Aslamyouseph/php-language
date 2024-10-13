<?php
include 'connection.php';

if (isset($_GET["updateid"])) {
  $sino = intval($_GET["updateid"]); // Ensure $sino is an integer

  $sql = "SELECT * FROM demoform WHERE sino = $sino";
  $result = mysqli_query($conn, $sql);

  if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $address = $row['address'];
  } else {
    die("Record not found.");
  }

  if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $sql = "UPDATE demoform SET name='$name', email='$email', phone='$phone', address='$address' WHERE sino = $sino";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      header('Location: display.php');
    } else {
      die("Error updating record: " . mysqli_error($conn));
    }
  }
} else {
  die("Invalid request.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Data</title>
</head>
<body>
  <form method="post">
    Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" required/><br/><br/>
    Email: <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required/><br/><br/>
    Phone: <input type="text" name="phone" value="<?php echo htmlspecialchars($phone); ?>" required/><br/><br/>
    Address: <input type="text" name="address" value="<?php echo htmlspecialchars($address); ?>" required/><br/><br/>
    <input type="submit" name="submit" value="Update"/>
  </form>
</body>
</html>
