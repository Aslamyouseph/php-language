<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "alloperation";

$connection = mysqli_connect($host, $user, $pass, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
// one of the major differens between creating the database in collage and self creating (i am created )is write the sql query for creating the table 
//in this file itself after the connection prosess
// sql=create table tablename(first coloum datatype(value),second coloum datatype(value))
?>