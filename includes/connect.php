<?php
    $connect = mysqli_connect("localhost", "root", "", "fathersheart2");
    if(!$connect){
        die("Database connection failed: " . mysqli_connect_error());
    }
?>