<?php
    include "connect_database(collage).php";
    $id = $_GET["updateid"];//section 1(first exectuting)
    $sql = "SELECT * FROM `crud` WHERE id=$id";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];

    if(isset($_POST["submit"])) {//section 3(third exectuting)
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        $sql = "UPDATE `crud` SET name='$name', email='$email', phone='$phone' WHERE id=$id";
        $result = mysqli_query($connection, $sql);

        if($result) {
            header('location:display_database(collage).php');
        } else {
            die(mysqli_error($connection));
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
            NAME: <input name="name" type="text" value="<?php echo $name; ?>"/><br/><br/>
            EMAIL: <input name="email" type="email" value="<?php echo $email; ?>"/> <br/><br/>
            PHONE: <input name="phone" type="number" value="<?php echo $phone; ?>"/><br/><br/>
            UPDATE: <input name="submit" type="submit"/><br/><br/>
        </form>
    </body>
</html>
