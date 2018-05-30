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
    print_r($_FILES);
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
    $district = mysqli_real_escape_string($connect, $_POST['district']);
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
    $distribution = mysqli_real_escape_string($connect, $_POST['distribution']);
    $often_movement = mysqli_real_escape_string($connect, $_POST['often_movement']);
    
    /*$distr = mysqli_query($connect, "SELECT id FROM recipients ORDER BY id DESC LIMIT 1");
    $distr_row = mysqli_fetch_array($distr);
    $distid = $distr_row['id'] + 1;
    $distrib_id = $distribution."_".$distid;*/
    /*$img_id = time();*/
    
    /*$sql = "INSERT INTO $distribution(fullname, phone, age, gender, date, back, thigh,leg, hips, disabilitystory, disability, causeofdisability, currentmobility, alreadyhas, whyhas, everhad, whyhad, whywantchair, givemobility, notgiven, followup, sit_alone, did_you_expect, live_with, helps_you, work_school, not_work_school, how_life_change, thanks, already_saved, got_saved, family_saved, did_pray, subcounty, district, distrib_id, `before`, `after`)";
    $sql .= " VALUES ('{$fullname}', '{$phone}', {$age}, '{$gender}', '{$date}', '{$back}', '{$thigh}','{$leg}', '{$hips}', '{$disabilitystory}', '{$disability}', '{$causeofdisability}', '{$currentmobility}', '{$alreadyhas}', '{$whyhas}', '{$everhad}', '{$whyhad}', '{$whywantchair}', '{$givemobility}', '{$notgiven}', '{$followup}', '{$sit_alone}', '{$did_you_expect}', '{$live_with}', '{$helps_you}', '{$work_school}', '{$not_work_school}', '{$how_life_change}', '{$thanks}', '{$already_saved}', '{$got_saved}', '{$family_saved}', '{$did_pray}', '{$subcounty}', '{$district}', 'distrib_id','{$before}', '{$after}')";
    
    mysqli_query($connect, $sql) or die(mysqli_error($connect));*/
                                       
    $before = mysqli_real_escape_string($connect, 'images/bef'.$_FILES['files']['name'][0]);
    $after = mysqli_real_escape_string($connect, 'images/aft'.$_FILES['files']['name'][1]);

    if(preg_match("!image!", $_FILES['files']['type'][0]) && preg_match("!image!", $_FILES['files']['type'][1])){
        if(copy($_FILES['files']['tmp_name'][0], $before) && copy($_FILES['files']['tmp_name'][1], $after)){
            $sql = "INSERT INTO $distribution(`fullname`, `phone`, `age`, `gender`, `date`, `back`, `thigh`,`leg`, `hips`, `disabilitystory`, `disability`, `causeofdisability`, `currentmobility`, `alreadyhas`, `whyhas`, `everhad`, `whyhad`, `whywantchair`, `givemobility`, `notgiven`, `followup`, `sit_alone`, `often_movement`, `did_you_expect`, `live_with`, `helps_you`, `work_school`, `not_work_school`, `how_life_change`, `thanks`, `already_saved`, `got_saved`, `family_saved`, `did_pray`, `subcounty`, `district`, `distrib_id`, `beforee`, `afterr`)";
            
            $sql .= " VALUES ('{$fullname}', '{$phone}', {$age}, '{$gender}', '{$date}', '{$back}', '{$thigh}','{$leg}', '{$hips}', '{$disabilitystory}', '{$disability}', '{$causeofdisability}', '{$currentmobility}', '{$alreadyhas}', '{$whyhas}', '{$everhad}', '{$whyhad}', '{$whywantchair}', '{$givemobility}', '{$notgiven}', '{$followup}', '{$sit_alone}', '{$often_movement}', '{$did_you_expect}', '{$live_with}', '{$helps_you}', '{$work_school}', '{$not_work_school}', '{$how_life_change}', '{$thanks}', '{$already_saved}', '{$got_saved}', '{$family_saved}', '{$did_pray}', '{$subcounty}', '{$district}', 'distrib_id','{$before}', '{$after}')";

            mysqli_query($connect, $sql) or die(mysqli_error($connect));
            
        }
    } else {
        echo "Not Image";
    }
    
    $device_result = mysqli_query($connect, "SELECT * FROM $givemobility ORDER BY id DESC LIMIT 1");
    $device_row = mysqli_fetch_array($device_result);
    $available = $device_row['available'] - 1;
    $given = $device_row['given'] + 1;
    $device_id = $device_row['id'];
    
    mysqli_query($connect, "UPDATE $givemobility SET available = $available, given = $given WHERE id = $device_id");
    
    redirect_to("welcome.php");
   
} else {
    redirect_to("index.php");
}
?>