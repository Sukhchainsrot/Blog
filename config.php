<?php
$conn = mysqli_connect('database','root','tiger','my_blog');
if($conn){
    // echo "yes";
}else{
    echo mysqli_connect_error();
}
?>