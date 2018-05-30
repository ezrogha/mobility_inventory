<?php

header('Content-Type: application/json');
    require_once "connect.php";
    require_once "functions.php";

    $data_points = array();

    $distrib_result = mysqli_query($connect, "SELECT * FROM distribution") or 
        die(mysqli_error($connect));
    $amputation = 0;
    $celebral = 0;
    $hydroce = 0;
    $muscular = 0;
    $paralysis = 0;
    $spinal = 0;
    $others = 0;
    while($distrib_row = mysqli_fetch_array($distrib_result)){
        
        
        global $amputation;
        global $celebral;
        global $hydroce;
        global $muscular;
        global $paralysis;
        global $spinal;
        global $others;
        
        $distribution = $distrib_row['distribution'];
        
        $distriba_result = mysqli_query($connect, "SELECT disability FROM $distribution WHERE disability = 'Amputation'") or die(mysqli_error($connect));
        $amputation_num = mysqli_num_rows($distriba_result);
        
        $distribc_result = mysqli_query($connect, "SELECT disability FROM $distribution WHERE disability = 'Celebral Paisy'") or die(mysqli_error($connect));
        $celebral_num = mysqli_num_rows($distribc_result);
        
        $distribh_result = mysqli_query($connect, "SELECT disability FROM $distribution WHERE disability = 'Hydrocephalus'") or die(mysqli_error($connect));
        $hydroce_num = mysqli_num_rows($distribh_result);
        
        $distribm_result = mysqli_query($connect, "SELECT disability FROM $distribution WHERE disability = 'Muscular Dystrophy'") or die(mysqli_error($connect));
        $muscular_num = mysqli_num_rows($distribm_result);
        
        $distribp_result = mysqli_query($connect, "SELECT disability FROM $distribution WHERE disability = 'Paralysis'") or die(mysqli_error($connect));
        $paralysis_num = mysqli_num_rows($distribp_result);
        
        $distribs_result = mysqli_query($connect, "SELECT disability FROM $distribution WHERE disability = 'Spinal Bifida'") or die(mysqli_error($connect));
        $spinal_num = mysqli_num_rows($distribs_result);
        
        $distribo_result = mysqli_query($connect, "SELECT disability FROM $distribution WHERE disability = 'Others'") or die(mysqli_error($connect));
        $others_num = mysqli_num_rows($distribo_result);
        
        
        
        $amputation = $amputation + $amputation_num;
        $celebral = $celebral + $celebral_num;
        $hydroce = $hydroce + $hydroce_num;
        $muscular = $muscular + $muscular_num;
        $paralysis = $paralysis + $paralysis_num;
        $spinal = $spinal + $spinal_num;
        $others = $others + $others_num;
        
    }
    
    $f = array("label" => " " , "y" => "0");

    $amputationn = array("label" => "Amputation" , "y" => $amputation);
    $celebrall = array("label" => "Celebral Paisy" , "y" => $celebral);
    $hydrocee = array("label" => "Hydrocephalus" , "y" => $hydroce);
    $muscularr = array("label" => "Muscular Dystrophy" , "y" => $muscular);
    $paralysiss = array("label" => "Paralysis" , "y" => $paralysis);
    $spinall = array("label" => "Spinal Bifida" , "y" => $spinal);
    $otherss = array("label" => "Others" , "y" => $others);

    array_push($data_points, $amputationn);
    array_push($data_points, $celebrall);
    array_push($data_points, $hydrocee);
    array_push($data_points, $muscularr);
    array_push($data_points, $paralysiss);
    array_push($data_points, $spinall);
    array_push($data_points, $otherss);
    array_push($data_points, $f);

    print json_encode($data_points);

    mysqli_close($connect);

?>