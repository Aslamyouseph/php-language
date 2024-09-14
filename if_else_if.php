<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditional_operator</title>
</head>
<body>
    <?php
    $a=10;
    $b=20;
    if($a >= $b)
    {
        echo "$a is the largest number : ";
    }
    elseif($b >= $a)
    {
        echo "$b is the largest number : ";
    }
    else
    {
        echo "the number is zero ";
    }
    ?>
</body>
</html>