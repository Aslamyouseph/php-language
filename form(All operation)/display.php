<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Contents</title>
</head>
<body>
  <table border="1">
    <tr>
      <th>SI No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Address</th>
      <th>Operations</th>
    </tr>
    <?php
    $sql = "SELECT * FROM demoform";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        $sino = $row['sino'];
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $address = $row['address'];
        ?>
        <tr>
          <td><?php echo $sino; ?></td>
          <td><?php echo $name; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $phone; ?></td>
          <td><?php echo $address; ?></td>
          <td>
            <a href="update.php?updateid=<?php echo $sino; ?>">Update</a>
            <a href="delete.php?deleteid=<?php echo $sino; ?>">Delete</a>
          </td>
        </tr>
        <?php
      }
    } else {
      echo "Error fetching records: " . mysqli_error($conn);
    }
    ?>
  </table>
</body>
</html>
