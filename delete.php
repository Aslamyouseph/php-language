<?php
include "connction.php"; 

if (isset($_GET['deleteid'])) 
{ 
    $id = $_GET["deleteid"]; 
    mysqli_select_db($conn, "web"); 
    $sql = "DELETE FROM `subjectt` WHERE `si_no` = $id";
    $result = mysqli_query($conn, $sql); 

    if ($result) { 
        header('Location: display.php'); 
        exit(); 
    } else {
        die("Data not deleted: " . mysqli_error($conn));
    }
}
?>
