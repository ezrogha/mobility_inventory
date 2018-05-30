<?php

require_once "includes/connect.php";
require_once "includes/functions.php";
session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $rating = $_POST['photo_rating'];
        $name = $_SESSION['name'];
        $reci_name = $_POST['reci_name'];
        $distrib_id = $_POST['distrib_id'];
        $follow = $_POST['follow'];
        
        $rate_result = mysqli_query($connect, "SELECT * FROM ratings WHERE staff = '$name' AND recipient = '$reci_name'");
        if(mysqli_num_rows($rate_result) > 0){
            mysqli_query($connect, "UPDATE ratings SET rating = $rating WHERE staff = '$name' AND recipient = '$reci_name'");
        } else {
            mysqli_query($connect, "INSERT INTO ratings(staff, recipient, rating) VALUES ('$name', '$reci_name', $rating)");
        }
        if($follow == 1){
            redirect_to("wait_list2.php?distrib_id=$distrib_id");
        } else {
            redirect_to("all_recipients.php?distrib_id=$distrib_id");
        }
    }
?>