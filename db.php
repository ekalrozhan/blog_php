<?php 
    $db = mysqli_connect("localhost", "root", "", "blog_php");

    if(mysqli_connect_error()){
        echo "Failed to connect".mysqli_connect_error();
    }

?>