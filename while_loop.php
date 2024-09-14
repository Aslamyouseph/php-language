<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while_loop</title>
</head>
<body>
    <?php
    $num=10;
    $sum=0;
    $i=1;
    while($i<=$num)
    {
        $sum=$sum+$i;
        $i++;
    }
    echo "Sum of the number : $sum "
    ?>
</body>
</html>