<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['fname'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="shadow w-450 p-3 text-center">
            <h3 class="display-4">Hello, <?= $_SESSION['fname'] ?></h3>
            <a href="logout.php" class="btn btn-warning">Logout</a>
        </div>
    </div>
</body>
</html>
<?php
} else {
    header("Location: login.php");
    exit;
}
?>
