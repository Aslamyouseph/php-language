<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get method</title>
</head>
<body>
    <form action="get.php" method="GET">
        <label for="name">Enter your name</label>
        <input type="text" name="name">
        <br>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit">
    </form>

    <?php
        $name = $_GET['name'];
        echo "Your name is $name";
        // this is not seccure and also we can able to see the name and password 
        // on the addrss bar so to avoid this we use the post method.
    ?>
</body>
</html>
