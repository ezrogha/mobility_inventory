<?php
    require_once "includes/connect.php";
    require_once "includes/functions.php";
    session_start();
        
    session_destroy();
    redirect_to("home.php");
?>