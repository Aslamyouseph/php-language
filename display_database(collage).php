<?php
include "connect_database(collage).php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display contents</title>
</head>
<body>
    <table>
        <tr>
            <th>si_no</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>operations</th>
        </tr>
        <?php
        $sql = "SELECT * FROM `crud`";
        $result = mysqli_query($connection, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                ?>
                <tr>
                    <th><?php echo $id; ?></th>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $phone; ?></td>
                    <td>
                        <button><a href="update_database(collage).php?updateid=<?php echo $id; ?>">Update</a></button><!-- button for updation (if we click on this button this move to the updation file)-->
                        <button><a href="delete_database(collage).php?deleteid=<?php echo $id; ?>">Delete</a></button><!-- button for deletion  (if we click on this button this move to the deletion file)-->
                    </td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
</body>
</html>
