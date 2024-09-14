<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post method </title>
</head>
<body>
    <form action="post.php" method="POST">
        <label for="name">name : </label>
        <input type="text" name="name">
        <br>
        <br>
        <label for="password">password : </label>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <input type="submit">

        <?php 
            $name = $_POST['name'];
            $pass= $_POST["password"];
            echo "<br>";
            echo "your name is $name ";
            echo "<br>";
            echo "your password is $pass"
        ?>
    </form>
</body>
</html>
<!-- in this the html code and php code which exicute in a single page or 
the same page -->