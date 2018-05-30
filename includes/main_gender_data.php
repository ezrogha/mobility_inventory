<?php

header('Content-Type: application/json');
    require_once "connect.php";
    require_once "functions.php";

    $data_points = array();

    $distrib_result = mysqli_query($connect, "SELECT * FROM distribution") or 
        die(mysqli_error($connect));
    $female = 0;
    $male = 0;
    while($distrib_row = mysqli_fetch_array($distrib_result)){
        global $female;
        global $male;
        $distribution = $distrib_row['distribution'];
        $distribf_result = mysqli_query($connect, "SELECT gender FROM $distribution WHERE gender = 'female'") or die(mysqli_error($connect));
        $female_num = mysqli_num_rows($distribf_result);
        
        $distribm_result = mysqli_query($connect, "SELECT gender FROM $distribution WHERE gender = 'male'") or die(mysqli_error($connect));
        $male_num = mysqli_num_rows($distribm_result);
        
        $female = $female + $female_num;
        $male = $male + $male_num;
        
    }
    
    $f = array("label" => " " , "y" => "0");

    $females = array("label" => "Female" , "y" => $female);
    $males = array("label" => "Male" , "y" => $male);

    array_push($data_points, $females);
    array_push($data_points, $males);
    array_push($data_points, $f);  

    print json_encode($data_points);

    mysqli_close($connect);

?>