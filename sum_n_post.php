<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>
<body>
    <form action="sum_n_post.php" method="POST">
        <label for="limit">Enter the limit : </label>
        <input type="number" name="limit" id ="limit">
        <br>
        <br>
        <input type="submit" name="submit">
    </form>
    <?php
    $limit=$_POST["limit"];
    $sum=0;
    for($i=1;$i<=$limit;$i++)
    {
        $sum=$sum+$i;
    } 
    echo "Sum of $limit number are $sum"
    ?>
</body>
</html>