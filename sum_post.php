<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>
<body>
    <form action="sum_post.php" method="POST">
        <label for="num1">Enter the first number : </label>
        <input type="number" name="num1" id="num1">
        <br>
        <br>
        <label for="num2">Enter the second number : </label>
        <input type="num2"name="num2" id="num2">
        <br>
        <br>
        <input type="submit" value="submit">
    </form>
    <?php 
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $sum=$num1+$num2;
    echo "<br>";
    echo "<br>";
    echo "$num1 + $num2 = $sum "   
    ?>
</body>
</html>