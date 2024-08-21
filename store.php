<?php
session_start();
include_once 'config.php';
if (isset($_POST['add'])) {
    $user_id = $_SESSION['uid'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $ext = pathinfo($_FILES['images']['name'], PATHINFO_EXTENSION);
    $file_name = time() . rand() . "." . $ext;
    $tmp_name = $_FILES['images']['tmp_name'];
    move_uploaded_file($tmp_name, "images/" . $file_name);
    $sql = "INSERT INTO `post`(`user_id`, `title`, `content`, `images`) VALUES ('$user_id','$title','$content','$file_name') ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>window.location.href='http://localhost/sukhchain/Blog/dashbord2.php'</script>";
    } else {
        echo mysqli_error($conn);
    }
}
