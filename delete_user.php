<?php
    require_once "includes/connect.php";
    require_once "includes/functions.php";

    if(isset($_GET['del_vol'])){
        $id = $_GET['del_vol'];
        $vol_result = mysqli_query($connect, "DELETE FROM volunteer WHERE id = $id");
        if($vol_result){
            redirect_to("signup.php");
        } else {
            die(mysqli_error($connect));
        }
    } else {
        $id = $_GET['del_staff'];
        $vol_result = mysqli_query($connect, "DELETE FROM staff WHERE id = $id");
        if($vol_result){
            redirect_to("staff.php");
        } else {
            die(mysqli_error($connect));
        }
    }
?>