<?php
    require_once "includes/connect.php";
    require_once "includes/functions.php";

    $distrib_id = $_GET['distrib_id'];
    $id = $_GET['del_id'];

    $distrib_result = mysqli_query($connect, "SELECT * FROM distribution WHERE id = $distrib_id");
    $distrib_row = mysqli_fetch_array($distrib_result);
    $distribution = $distrib_row['distribution'];

    $recip_result = mysqli_query($connect, "DELETE FROM $distribution WHERE id = $id");
    if($recip_result){
        redirect_to("all_recipients.php?distrib_id=$distrib_id");
    }
?>