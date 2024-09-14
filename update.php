<?php
include "connction.php";
   //this sectioin is used to access the id of the particular feild which user whant's to update 
    $id = $_GET["updateid"];//section 1(first exectuting)
    mysqli_select_db($conn, "web"); 
    $sql = "SELECT * FROM `subjectt` WHERE `si_no` = $id";
    //this section is used to access all the values of a particular id which user is  selecte
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];

    if(isset($_POST["submit"])) {//section 3(third exectuting)
        //this section which is used to access the modifed values from the section 1 
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        $sql = "UPDATE `subjectt` SET name='$name', email='$email', phone='$phone' WHERE `si_no` = $id";
        $result = mysqli_query($conn, $sql);

        if($result) {
            header('Location: display.php'); 
        } else {
            die(mysqli_error($conn));
        }
    }
?>

<!DOCTYPE html><!--section 2  (second exectuting)-->
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Updating data</title>
    </head>
    <body>
        <form method="post">
            <!-- this section which display the values which we recive in the section 1 on the form -->
            NAME: <input name="name" type="text" value="<?php echo $name; ?>"/><br/><br/>
            EMAIL: <input name="email" type="email" value="<?php echo $email; ?>"/> <br/><br/>
            PHONE: <input name="phone" type="number" value="<?php echo $phone; ?>"/><br/><br/>
            UPDATE: <input name="submit" type="submit"/><br/><br/>
        </form>
    </body>
</html>
