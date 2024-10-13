<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form class="shadow w-450 p-3" action="login_php.php" method="post" id="loginForm">
            <h4 class="display-4 fs-1">Login</h4><br>
            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?= $_GET['error']; ?>
            </div>
            <?php } ?>
            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" name="uname" id="uname" class="form-control" value="<?= isset($_GET['uname']) ? $_GET['uname'] : '' ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="index.php" class="link-secondary">Sign Up</a>
        </form>
    </div>
    <script>
        document.getElementById('loginForm').onsubmit = function(event) {
            var uname = document.getElementById("uname").value;
            var password = document.getElementById("password").value;

            // Check for the admin credentials
            if(uname === "iamadmin" && password === "123123") {
                event.preventDefault(); // Prevent the form from submitting
                window.location.href = "admin.php"; // Redirect to admin page
            }
        };
    </script>
</body>
</html>
