<?php
require_once "includes/connect.php";
require_once "includes/functions.php";

    session_start();
    if(isset($_SESSION['user'])){
        
    } else {
        redirect_to("home.php");
    }

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    print_r($_POST);
    $fullname = mysqli_real_escape_string($connect, $_POST['fullname']);
    $phone = mysqli_real_escape_string($connect, $_POST['phone']);
    $age = mysqli_real_escape_string($connect, $_POST['age']);
    $gender = mysqli_real_escape_string($connect, $_POST['gender']);
    $date = mysqli_real_escape_string($connect, date("m/d/Y", time()));
    $back = mysqli_real_escape_string($connect, $_POST['back']);
    $thigh = mysqli_real_escape_string($connect, $_POST['thigh']);
    $leg = mysqli_real_escape_string($connect, $_POST['leg']);
    $hips = mysqli_real_escape_string($connect, $_POST['hips']);
    $disabilitystory = mysqli_real_escape_string($connect, $_POST['disabilitystory']);
    $disability = mysqli_real_escape_string($connect, $_POST['disability']);
    $causeofdisability = mysqli_real_escape_string($connect, $_POST['causeofdisability']);
    $currentmobility = mysqli_real_escape_string($connect, $_POST['currentmobility']);
    $alreadyhas = mysqli_real_escape_string($connect, $_POST['alreadyhas']);
    $whyhas = mysqli_real_escape_string($connect, $_POST['whyhas']);
    $everhad = mysqli_real_escape_string($connect, $_POST['everhad']);
    $whyhad = mysqli_real_escape_string($connect, $_POST['whyhad']);
    $whywantchair = mysqli_real_escape_string($connect, $_POST['whywantchair']);
    $givemobility = mysqli_real_escape_string($connect, $_POST['givemobility']);
    $notgiven = mysqli_real_escape_string($connect, $_POST['notgiven']);
    $followup = mysqli_real_escape_string($connect, $_POST['follow']);
    /*$churchreferal = mysqli_real_escape_string($connect, $_POST['churchreferal']);*/
    $subcounty = mysqli_real_escape_string($connect, $_POST['subcounty']);
    $sit_alone = mysqli_real_escape_string($connect, $_POST['sit_alone']);
    $did_you_expect = mysqli_real_escape_string($connect, $_POST['did_you_expect']);
    $live_with = mysqli_real_escape_string($connect, $_POST['live_with']);
    $helps_you = mysqli_real_escape_string($connect, $_POST['helps_you']);
    $work_school = mysqli_real_escape_string($connect, $_POST['work_school']);
    $not_work_school = mysqli_real_escape_string($connect, $_POST['not_work_school']);
    $how_life_change = mysqli_real_escape_string($connect, $_POST['How_life_change']);
    $thanks = mysqli_real_escape_string($connect, $_POST['thanks']);
    $already_saved = mysqli_real_escape_string($connect, $_POST['already_saved']);
    $got_saved = mysqli_real_escape_string($connect, $_POST['got_saved']);
    $family_saved = mysqli_real_escape_string($connect, $_POST['family_saved']);
    $did_pray = mysqli_real_escape_string($connect, $_POST['did_pray']);
    $often_movement = mysqli_real_escape_string($connect, $_POST['often_movement']);
    $distrib_id = $_POST['distrib_id'];
    $reci_id = $_POST['reci_id'];
    
     $distrib_sql = "SELECT * FROM distribution WHERE id='{$distrib_id}'";
     $distrib_result = mysqli_query($connect, $distrib_sql);
     $distrib_row= mysqli_fetch_array($distrib_result);
     $distribution = $distrib_row['distribution'];
    
    /*$distr = mysqli_query($connect, "SELECT id FROM recipients ORDER BY id DESC LIMIT 1");
    $distr_row = mysqli_fetch_array($distr);
    $distid = $distr_row['id'] + 1;
    $distrib_id = $distribution."_".$distid;*/
    /*$img_id = time();*/
    
    /*$sql = "UPDATE $distribution(fullname, phone, age, gender, date, back, thigh,leg, hips, disabilitystory, disability, causeofdisability, currentmobility, alreadyhas, whyhas, everhad, whyhad, whywantchair, givemobility, notgiven, followup, sit_alone, did_you_expect, live_with, helps_you, work_school, not_work_school, how_life_change, thanks, already_saved, got_saved, family_saved, did_pray, subcounty, distrib_id, `before`, `after`)";
    $sql .= " VALUES ('{$fullname}', '{$phone}', {$age}, '{$gender}', '{$date}', '{$back}', '{$thigh}','{$leg}', '{$hips}', '{$disabilitystory}', '{$disability}', '{$causeofdisability}', '{$currentmobility}', '{$alreadyhas}', '{$whyhas}', '{$everhad}', '{$whyhad}', '{$whywantchair}', '{$givemobility}', '{$notgiven}', '{$followup}', '{$sit_alone}', '{$did_you_expect}', '{$live_with}', '{$helps_you}', '{$work_school}', '{$not_work_school}', '{$how_life_change}', '{$thanks}', '{$already_saved}', '{$got_saved}', '{$family_saved}', '{$did_pray}', '{$subcounty}', 'distrib_id','{$before}', '{$after}')";
    
    mysqli_query($connect, $sql) or die(mysqli_error($connect));*/
    

    
            $sql = "UPDATE $distribution SET fullname = '{$fullname}' , phone = '{$phone}', age = {$age}, gender = '{$gender}', date = '{$date}', back = '{$back}', thigh = '{$thigh}', leg = '{$leg}' , hips = '{$hips}', disabilitystory = '{$disabilitystory}', disability = '{$disability}', causeofdisability = '{$causeofdisability}', currentmobility = '{$currentmobility}', alreadyhas = '{$alreadyhas}', whyhas = '{$whyhas}', everhad = '{$everhad}', whyhad = '{$whyhad}', whywantchair = '{$whywantchair}', givemobility = '{$givemobility}', notgiven = '{$notgiven}', followup = '{$followup}', sit_alone = '{$sit_alone}', often_movement = '{$often_movement}', did_you_expect = '{$did_you_expect}', live_with = '{$live_with}', `helps_you` = '{$helps_you}', work_school = '{$work_school}', not_work_school = '{$not_work_school}', how_life_change = '{$how_life_change}', thanks = '{$thanks}', already_saved = '{$already_saved}', got_saved = '{$got_saved}', family_saved = '{$family_saved}', did_pray = '{$did_pray}', subcounty = '{$subcounty}' WHERE id = $reci_id";
    
             mysqli_query($connect, $sql) or die(mysqli_error($connect));
            
       
    
    redirect_to("index2.php?distrib_id=$distrib_id");
   
} else {
    redirect_to("index.php");
}
?>