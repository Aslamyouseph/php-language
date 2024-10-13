<?php
include 'connection.php';

if (isset($_GET['deleteid'])) {
  $sino = intval($_GET['deleteid']); // Ensure $sino is an integer
  $sql = "DELETE FROM demoform WHERE sino = $sino";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    header('Location: display.php');
    exit();
  } else {
    die("Data not deleted: " . mysqli_error($conn));
  }
}
?>
