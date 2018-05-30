<?php

function confirm_query($result){
        global $connect;
        if(!$result){
            die("Database query Error: " . mysqli_error($connect));
        }
    }
    
    function redirect_to($location){
        header("Location: $location");
        exit;
    }

    function available($name){
        global $connect;
        $sql = "SELECT '{$name}' FROM inventory ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($connect, $sql) or
            die(mysqli_error($connect));
        $row = mysqli_fetch_array($result);
        return print_r($row);
    }
    
?>