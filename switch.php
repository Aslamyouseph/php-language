<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
    <?php
    $a=1;
    switch($a)
    {
        case 1:
            echo "it is in a block : ";
            break;
        case 2:
            echo "it is in b block : ";
            break;
        default:
           echo "please enter the correct value : ";
           break; 
    }
    ?>
</body>
</html>