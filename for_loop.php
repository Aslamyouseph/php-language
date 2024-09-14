<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forloop</title>
</head>
<body>
    <?php
    $num=10;
    $sum=0;
    for($i=1;$i<=$num;$i++)
    {
        $sum=$sum+$i;
    }
    echo "Sum of the number is $sum ";
    ?>
</body>
</html>