<?php
session_start();
$_SESSION['status'] = 0;
session_unset();
session_destroy();
header("location:login.php");
