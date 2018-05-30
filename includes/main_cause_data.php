<?php

header('Content-Type: application/json');
    require_once "connect.php";
    require_once "functions.php";

    $data_points = array();

    $distrib_result = mysqli_query($connect, "SELECT * FROM distribution") or 
        die(mysqli_error($connect));
    $accident = 0;
    $birth = 0;
    $malaria = 0;
    $stroke = 0;
    $polio = 0;
    $old = 0;
    $cancer = 0;
    $others = 0;
    while($distrib_row = mysqli_fetch_array($distrib_result)){
        
        
        global $accident;
        global $birth;
        global $malaria;
        global $stroke;
        global $polio;
        global $old;
        global $cancer;
        global $others;
        
        $distribution = $distrib_row['distribution'];
        
        $distriba_result = mysqli_query($connect, "SELECT causeofdisability FROM $distribution WHERE causeofdisability = 'Accident'") or die(mysqli_error($connect));
        $accident_num = mysqli_num_rows($distriba_result);
        
        $distribb_result = mysqli_query($connect, "SELECT causeofdisability FROM $distribution WHERE causeofdisability = 'Birth Defect/Trauma'") or die(mysqli_error($connect));
        $birth_num = mysqli_num_rows($distribb_result);
        
        $distribm_result = mysqli_query($connect, "SELECT causeofdisability FROM $distribution WHERE causeofdisability = 'Malaria'") or die(mysqli_error($connect));
        $malaria_num = mysqli_num_rows($distribm_result);
        
        $distribp_result = mysqli_query($connect, "SELECT causeofdisability FROM $distribution WHERE causeofdisability = 'Polio'") or die(mysqli_error($connect));
        $polio_num = mysqli_num_rows($distribp_result);
        
        $distribs_result = mysqli_query($connect, "SELECT causeofdisability FROM $distribution WHERE causeofdisability = 'Stroke'") or die(mysqli_error($connect));
        $stroke_num = mysqli_num_rows($distribs_result);
        
        $distribo_result = mysqli_query($connect, "SELECT causeofdisability FROM $distribution WHERE causeofdisability = 'Old Age'") or die(mysqli_error($connect));
        $old_num = mysqli_num_rows($distribo_result);
        
        $distribc_result = mysqli_query($connect, "SELECT causeofdisability FROM $distribution WHERE causeofdisability = 'Cancer'") or die(mysqli_error($connect));
        $cancer_num = mysqli_num_rows($distribc_result);
        
        $distribo_result = mysqli_query($connect, "SELECT causeofdisability FROM $distribution WHERE causeofdisability = 'Unknown/Other'") or die(mysqli_error($connect));
        $others_num = mysqli_num_rows($distribo_result);
        
        
        
        $accident = $accident + $accident_num;
        $birth = $birth + $birth_num;
        $malaria = $malaria + $malaria_num;
        $polio = $polio + $polio_num;
        $stroke = $stroke + $stroke_num;
        $old = $old + $old_num;
        $cancer = $cancer + $cancer_num;
        $others = $others + $others_num;
        
    }
    
    $f = array("label" => " " , "y" => "0");

    $accidentt = array("label" => "Accident" , "y" => $accident);
    $birthh = array("label" => "Birth Defect/Trauma" , "y" => $birth);
    $malariaa = array("label" => "Malaria" , "y" => $malaria);
    $polioo = array("label" => "Polio" , "y" => $polio);
    $strokee = array("label" => "Stroke" , "y" => $stroke);
    $oldd = array("label" => "Old Age" , "y" => $old);
    $cancerr = array("label" => "Cancer" , "y" => $cancer);
    $otherss = array("label" => "Unknown/Other" , "y" => $others);

    array_push($data_points, $accidentt);
    array_push($data_points, $birthh);
    array_push($data_points, $malariaa);
    array_push($data_points, $polioo);
    array_push($data_points, $strokee);
    array_push($data_points, $oldd);
    array_push($data_points, $oldd);
    array_push($data_points, $cancerr);
    array_push($data_points, $f);

    print json_encode($data_points);

    mysqli_close($connect);

?>