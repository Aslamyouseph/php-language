<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>assosiated_array</title>
</head>
<body>
    <?php
    $place=array("ktml"=>"kothamangalam","kur"=>"kannur","ptm"=>"pathanamthitta");
    foreach($place as $i => $i_place)
    {
        echo "$i = $i_place";//used for printing key value formate 
        echo "<br>";
        echo "$i";// used for printing the key 
        echo "<br>";
        echo "$i_place"; // used for priting the value 
        echo "<br>";
    }
    ?>
</body>
</html>