<?php
include "config.php";
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `user` WHERE email='$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['auth_status'] = 1;
        $_SESSION['uid'] = $row['user_id'];
        $_SESSION['user_name'] = $row['name'];
        echo "<script>window.location.href='http://localhost:82/sukhchain/Blog/dashbord2.php'</script>";
    } else {
        header("location:login.php");
    }
}