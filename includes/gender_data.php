<?php

header('Content-Type: application/json');
    require_once "connect.php";
    require_once "functions.php";

    $id = $_GET['distrib_id'];

    $distrib_result = mysqli_query($connect, "SELECT * FROM distribution WHERE id = $id LIMIT 1") or 
        die(mysqli_error($connect));
    $distrib_row = mysqli_fetch_array($distrib_result);
    $distribution = $distrib_row['distribution'];

    $data_points = array();
    
    $result = mysqli_query($connect, "SELECT gender, count(*) FROM $distribution GROUP BY gender");
    
    $f = array("label" => " " , "y" => "0");
    
    while($row = mysqli_fetch_array($result))
    {        
        $point = array("label" => $row['gender'] , "y" => $row['count(*)']);
        
        array_push($data_points, $point);        
    }
    array_push($data_points, $f);  
    print json_encode($data_points);

    mysqli_close($connect);

?>