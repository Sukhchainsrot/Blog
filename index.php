<?php
include_once "config.php";
$sql = "SELECT * FROM `post` WHERE `deleted_at`= '0'";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <table>
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Image</th>
            <th>Title</th>
            <th>Content</th>
            <th>Acation</th>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <td><?php echo $row['name'];  ?></td>
                    <td><?php echo $row['email'];  ?></td>
                    <td><?php echo $row['images'];  ?></td>
                    <td><?php echo $row['title'];  ?></td>
                    <td><?php echo $row['content'];  ?></td>

            <?php
                }
            }    ?>

        </tbody>
    </table>
</body>

</html>