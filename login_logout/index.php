<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form class="shadow w-450 p-3" action="signup.php" method="post">
            <h4 class="display-4 fs-1">Create Account</h4><br>
            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?= $_GET['error']; ?>
            </div>
            <?php } ?>
            <?php if (isset($_GET['success'])) { ?>
            <div class="alert alert-success" role="alert">
                <?= $_GET['success']; ?>
            </div>
            <?php } ?>
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="fname" class="form-control" value="<?= isset($_GET['fname']) ? $_GET['fname'] : '' ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" name="uname" class="form-control" value="<?= isset($_GET['uname']) ? $_GET['uname'] : '' ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Email ID</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
            <a href="login.php" class="link-secondary">Login</a>
        </form>
    </div>
</body>
</html>
