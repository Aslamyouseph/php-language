<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index_array</title>
</head>
<body>
    <?php
    $fruits=array("apple","orange","pappaya","grapes","kiwi","banana");
    echo "Fruits are :";
    echo "<br>";
    for($i=1;$i<=count($fruits);$i++) //count () is used to find the total number of elements present in the $fruits array 
    {
       
        echo $fruits[$i];
        echo "<br>";
    }
    ?>
</body>
</html>