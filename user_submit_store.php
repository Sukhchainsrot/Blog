<?php
include "config.php";

if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO user( name,email,password) VALUES ('$name','$email','$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "data inserted";
            echo "<script>window.location.href='http://localhost:82/sukhchain/Blog/login.php'</script>";
        } else {
            echo "data insertion failed";
        }
    }

?>