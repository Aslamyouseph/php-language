<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assosiated_arrayn </title>
</head>
<body>
    <?php
    $country=array("IND"=>"INDIA","US"=>"UNATED STSTES","UK"=>"UNITED KINGDOM ","SR"=>"SRILANKA","SPN"=>"SPPAIN");
    foreach($country as $c => $c_value)
    // in the above foreach loop $c is used to store the key  of the line number 10 and $c_value is used to store the the value of the line 10 
    {
        echo "$c = $c_value";

        echo "<br>";
    }
    ?>
</body>
</html>