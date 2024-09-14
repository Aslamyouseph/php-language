<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include</title>
</head>
<body>
    <?php include "hedder_include.php"?><!--linking a php file to the main file by using a include() funtion -->
    <h1>This is the main file </h1>
    <?php include "footer_include.html"?><!--linking a html file to the main file by using a include() funtion -->
</body>
</html>
<!--we can able to use this include on html or php .
 this process is mainly using to give a commen thing to multiple page 
we didnot wand to write the common thing to seperatily to all the files
write it in a sapparate file and link that particular file with the the neede file by using the include ()funtion.
and also we can add it in hedder section (above our main file section) or  footer section (below in the main file )
-->