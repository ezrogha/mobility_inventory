<?php
    require_once "includes/connect.php";
    require_once "includes/functions.php";
    
    session_start();

    if(!isset($_SESSION['user'])){
        redirect_to("home.php");
    }

    if(isset($_GET['distrib_id'])){
        $distrib_id = $_GET['distrib_id'];
        $reci_id = $_GET['id'];
        
        $distrib_sql = "SELECT * FROM distribution WHERE id='{$distrib_id}'";
        $distrib_result = mysqli_query($connect, $distrib_sql);
        $distrib_row= mysqli_fetch_array($distrib_result);
        $district = $distrib_row['district'];
        $distribution = $distrib_row['distribution'];
        
        $reci_result = mysqli_query($connect, "SELECT * FROM $distribution WHERE id = $reci_id")or die(mysqli_error($connect));
        $reci_row = mysqli_fetch_array($reci_result);
        $reci_gender = $reci_row['gender'];
        $reci_disability = $reci_row['disability'];
        $reci_cause = $reci_row['causeofdisability'];
        $reci_current = $reci_row['currentmobility'];
        $reci_alreadyhas = $reci_row['alreadyhas'];
        $reci_everhad = $reci_row['everhad'];
        $reci_givemobility = $reci_row['givemobility'];
        $reci_sitalone = $reci_row['sit_alone'];
        $reci_often = $reci_row['often_movement'];
        $reci_did_you_expect = $reci_row['did_you_expect'];
        $reci_live_with = $reci_row['live_with'];
        $reci_helps_you = $reci_row['helps_you'];
        $reci_work = $reci_row['work_school'];
        $reci_pray = $reci_row['did_pray'];
        $reci_already_saved = $reci_row['already_saved'];
        $reci_got_saved = $reci_row['got_saved'];
        $reci_family_saved = $reci_row['family_saved'];
        $reci_followup = $reci_row['followup'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <title>Father's Heart</title>
        
        <link rel="shortcut icon" href="images/FHMM.png" type="text/css" />
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/font-awesome.css" rel="stylesheet" />
        <link href="css/custom-styles.css" rel="stylesheet" />
        <link href="css/checkbox3.min.css" rel="stylesheet" />
        
        <style>
            .form_head {
                color:#ccc;
                font-size:36px;
                text-shadow:1px 1px 1px #fff;
                padding:20px;
            }
            /*#page-inner {
                height: 1200px;
            }*/
            #page-wrapper {
                height: /*1400px*/;
            }
            .opac {
                visibility: hidden;
            }
            .fh {
                transition: 0.2s;
            }
            .fh:hover {
                transform: scale(5) translate(15px, 13px);
            }
            /*.btn-primary {
                background-color: #b9960b;
                border-color: #b9960b;
            }
            .btn-primary:hover {
                background-color: #daa81d;
                border-color: #b9960b;
            }*/
        </style>
    </head> 
    <body>
        <div id="wrapper">
         <?php include "includes/header.php"; ?>
        <div id="page-wrapper">
		  <div class="header"> 
            <h1 class="page-header">
                <?php echo $distribution; ?>
            </h1>
              <?php if(isset($_GET['page'])){ ?>
              <ol class="breadcrumb">
              <li><a href="index2.php?distrib_id=<?php echo $distrib_id; ?>"><?php echo $distribution; ?></a></li>
              <li><a href="wait_list2.php?distrib_id=<?php echo $distrib_id; ?>">Wait List</a></li>
              <li class="active">Edit Recipient</li>
            </ol>
              <?php } else { ?>
            <ol class="breadcrumb">
              <li><a href="index2.php?distrib_id=<?php echo $distrib_id; ?>"><?php echo $distribution; ?></a></li>
              <li><a href="all_recipients.php?distrib_id=<?php echo $distrib_id; ?>">Recipients</a></li>
              <li class="active">Edit Recipient</li>
            </ol>
              <?php } ?>
		 </div>
            <div id="page-inner">
            <div class="row">
            <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-body">
            
            <div id="pwrapper" style="width: 100%">
                
                    <form method="post" action="process_edit.php" enctype="multipart/form-data" autocomplete="off">
                        
              
                    <div class="row">
                        <div class="form-group col-md-6">
                            <span class="col-md-3" style="padding-top: 7px"><b>Fullname:</b></span> <span class="col-md-9"><input type="text" name="fullname" class="form-control" placeholder="" value="<?php echo $reci_row['fullname'];?>"/></span>
                        </div>
                        <div class="form-group col-md-6">
                            <span class="col-md-2" style="padding-top: 7px"><b>Phone:</b></span><span class="col-md-10"><input type="tel" name="phone" class="form-control" placeholder="" value="<?php echo $reci_row['phone'];?>" /></span>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="form-group col-md-6">
                            <span class="col-md-2" style="padding-top: 7px"><b>Age:</b></span><span class="col-md-10"><input type="number" name="age" class="form-control" placeholder="" value="<?php echo $reci_row['age'];?>"/></span>
                        </div>
                        <div class="form-group col-md-6">
                            &nbsp;&nbsp;&nbsp;&nbsp;<b>Gender:</b>&nbsp;&nbsp;&nbsp;
                           <div class="radio3 radio-check radio-inline">
                            <input type="radio" id="radio4" name="gender" value="male" <?php if($reci_gender == 'male'){ echo 'checked';}?>>
                            <label for="radio4">
                              Male
                            </label>
                          </div>
                          <div class="radio3 radio-check radio-warning radio-inline">
                            <input type="radio" id="radio5" name="gender" value="female" <?php if($reci_gender == 'female'){ echo 'checked';}?>>
                            <label for="radio5">
                              Female
                            </label>
                           </div>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="form-group col-md-6">
                            <span class="col-md-2" style="padding-top: 7px"><b>District:</b></span><span class="col-md-10"><input type="text" name="district" class="form-control" placeholder="" value="<?php echo $district; ?>" disabled/></span>
                        </div>
                        <div class="form-group col-md-6">
                            <span class="col-md-4" style="padding-top: 7px"><b>Sub County:</b></span>
                            <span class="col-md-8"><select name="subcounty" class="form-control">
                                <option><?php echo $reci_row['subcounty']; ?></option>
                                </select></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <span class="col-md-1" style="padding-top: 7px"><b>Story:</b></span><span class="col-md-11"><textarea name="disabilitystory" class="form-control" placeholder="" rows="4"><?php echo $reci_row['disabilitystory']; ?></textarea></span>
                        </div>
                    </div>  
                        <br />
                        
                   <div class="row">
                        <div class="form-group col-md-6">
                            <span class="col-md-3" style="padding-top: 7px"><b>Disability:</b></span><span class="col-md-9"><select name="disability" class="form-control">
                                <option value="" disabled selected style="display: none;">Disability</option>
                                <option value="Amputation" <?php if($reci_disability == 'Amputation'){echo 'selected';}?>>Amputation</option>
                                <option value="Celebral Paisy" <?php if($reci_disability == 'Celebral Paisy'){echo 'selected';}?>>Celebral Paisy</option>
                                <option value="Hydrocephalus" <?php if($reci_disability == 'Hydrocephalus'){echo 'selected';}?>>Hydrocephalus</option>
                                <option value="Muscular Dystrophy" <?php if($reci_disability == 'Muscular Dystrophy'){echo 'selected';}?>>Muscular Dystrophy</option>
                                <option value="Paralysis" <?php if($reci_disability == 'Paralysis'){echo 'selected';}?>>Paralysis</option>
                                <option value="Spinal Bifida" <?php if($reci_disability == 'Spinal Bifida'){echo 'selected';}?>>Spinal Bifida</option>
                                <option value="Others" <?php if($reci_disability == 'Others'){echo 'selected';}?>>Others</option>
                            </select></span>
                        </div>
                       <div class="form-group col-md-6">
                           <span class="col-md-4" style="padding-top: 7px"><b>Cause of Disability:</b></span>
                           <span class="col-md-8">
                            <select name="causeofdisability" class="form-control">
                                <option value="" disabled selected style="display: none;">Cause of Disability</option>
                                <option value="Accident" <?php if($reci_cause == 'Accident'){echo 'selected';}?>>Accident</option>
                                <option value="Birth Defect/Trauma" <?php if($reci_cause == 'Birth Defect/Trauma'){echo 'selected';}?>>Birth Defect/Trauma</option>
                                <option value="Malaria" <?php if($reci_cause == 'Malaria'){echo 'selected';}?>>Malaria</option>
                                <option value="Polio" <?php if($reci_cause == 'Polio'){echo 'selected';}?>>Polio</option>
                                <option value="Stroke" <?php if($reci_cause == 'Stroke'){echo 'selected';}?>>Stroke</option>
                                <option value="Old Age" <?php if($reci_cause == 'Old Age'){echo 'selected';}?>>Old Age</option>
                                <option value="Cancer" <?php if($reci_cause == 'Cancer'){echo 'selected';}?>>Cancer</option>
                                <option value="Unknown/Other" <?php if($reci_cause == 'Unknown/Other'){echo 'selected';}?>>Unknown/Other</option>
                            </select></span>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="form-group col-md-6">
                            <span class="col-md-4" style="padding-top: 7px"><b>Current Mobility:</b></span>
                            <span class="col-md-8">
                            <select name="currentmobility" class="form-control">
                                <option value="" disabled selected style="display: none;">Current Mobility Method</option>
                                <option value="crawls" <?php if($reci_current == 'crawls'){echo 'selected';}?>>Crawls</option>
                                <option value="carried" <?php if($reci_current == 'carried'){echo 'selected';}?>>Carried</option>
                                <option value="crutches" <?php if($reci_current == 'crutches'){echo 'selected';}?>>Crutches</option>
                                <option value="Walks with difficulty" <?php if($reci_current == 'Walks with difficulty'){echo 'selected';}?>>Walks with difficulty</option>
                                <option value="Old Wheel Chair" <?php if($reci_current == 'Old Wheel Chair'){echo 'selected';}?>>Old Wheel Chair</option>
                                <option value="others" <?php if($reci_current == 'others'){echo 'selected';}?>>others</option>
                            </select></span>
                        </div>
                        <div class="form-group col-md-6">
                            
                        </div>
                        
                      </div>
                        <hr />
                        
                     <div class="row" style="">
                        <div class="form-group col-md-6"> 
                            &nbsp;&nbsp;&nbsp;&nbsp;<b>Do you already have a wheelchair:</b>
                            <div class="pull-right" style="margin-right: 5px">
                               <div class="radio3 radio-check radio-success radio-inline">
                                <input type="radio" id="radio6" name="alreadyhas" id="yalreadyhas" value="yes" <?php if($reci_alreadyhas == 'yes'){ echo 'checked';}?>>
                                <label for="radio6">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline">
                                <input type="radio" id="radio7" name="alreadyhas" id="nalreadyhas" value="no" <?php if($reci_alreadyhas == 'no'){ echo 'checked';}?>>
                                <label for="radio7">
                                  No
                                </label>
                               </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <span class="col-md-3" style="padding-top: 7px"><b>If<span style="opacity:0">_</span>yes,<span style="opacity:0">_</span>explain:</b></span>
                            <span class="col-md-9">
                            <input id="whyhas" type="text" name="whyhas" placeholder="" class="form-control" value="<?php echo $reci_row['whyhas']?>"/></span>
                        </div>
                    </div>
                    <hr />
                    <!--Tab Panel-->
                        
                       <div class="row" style="">
                        <div class="form-group col-md-6"> 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Have you ever had a wheelchair:</b>
                            <div class="pull-right" style="margin-right: 5px">
                               <div class="radio3 radio-check radio-success radio-inline">
                                <input type="radio" id="radio8" name="everhad" id="yeverhad" value="yes" <?php if($reci_everhad == 'yes'){ echo 'checked';}?>>
                                <label for="radio8">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline">
                                <input type="radio" id="radio9" name="everhad" id="neverhad" value="no" <?php if($reci_everhad == 'no'){ echo 'checked';}?>>
                                <label for="radio9">
                                  No
                                </label>
                               </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <span class="col-md-3" style="padding-top: 7px"><b>If<span style="opacity:0">_</span>yes,<span style="opacity:0">_</span>explain:</b></span><span class="col-md-9">
                            <input type="text" name="whyhad" id="whyhad" placeholder="" class="form-control" value="<?php echo $reci_row['whyhad']?>"/></span>
                        </div>
                    </div><hr />
                    <div class="row" style="">
                        <div class="form-group col-md-6">
                            <span class="col-md-9" style="padding-top: 7px"><b>Why do you want a mobility device?</b></span><span class="col-md-12"><input type="text" name="whywantchair" class="form-control" placeholder="" value="<?php echo  $reci_row['whywantchair']; ?>"/></span>
                        </div>
                        <div class="form-group col-md-6">
                            <br />
                            <span class="col-md-3" style="padding-top: 7px"><b>Give Mobility</b></span>
                            <span class="col-md-9">
                            <select name="givemobility" class="form-control">
                                <option value="" disabled selected style="display: none;">Give Mobility</option>
                                <option value="gen1" <?php if($reci_givemobility == 'gen1'){echo 'selected';}?>>GEN1</option>
                                <option value="gen2_s_13" <?php if($reci_givemobility == 'gen2_s_13'){echo 'selected';}?>>GEN2: S</option>
                                <option value="gen2_m_17" <?php if($reci_givemobility == 'gen2_m_17'){echo 'selected';}?>>GEN2: M</option>
                                <option value="gen2_l_18_5" <?php if($reci_givemobility == 'gen2_l_18_5'){echo 'selected';}?>>GEN2: L</option>
                                <option value="gen2_xl_20" <?php if($reci_givemobility == 'gen2_xl_20'){echo 'selected';}?>>GEN2: XL</option>
                                <option value="gen3_s_13" <?php if($reci_givemobility == 'gen3_s_13'){echo 'selected';}?>>GEN3: S</option>
                                <option value="gen3_m_17" <?php if($reci_givemobility == 'gen3_m_17'){echo 'selected';}?>>GEN3: M</option>
                                <option value="gen3_l_18_5" <?php if($reci_givemobility == 'gen3_l_18_5'){echo 'selected';}?>>GEN3: L</option>
                                <option value="gen3_xl_20" <?php if($reci_givemobility == 'gen3_xl_20'){echo 'selected';}?>>GEN3: XL</option>
                                <option value="jaf" <?php if($reci_givemobility == 'jaf'){echo 'selected';}?>>JAF</option>
                                <option value="hb_11" <?php if($reci_givemobility == 'hb_11'){echo 'selected';}?>>HB 11</option>
                                <option value="hb_13" <?php if($reci_givemobility == 'hb_13'){echo 'selected';}?>>HB 13</option>
                                <option value="crutches" <?php if($reci_givemobility == 'crutches'){echo 'selected';}?>>Crutches</option>
                                <option value="cane" <?php if($reci_givemobility == 'cane'){echo 'selected';}?>>Cane</option>
                                <option value="walkers" <?php if($reci_givemobility == 'walkers'){echo 'selected';}?>>Walker</option>
                                <option value="white_cane" <?php if($reci_givemobility == 'white_cane'){echo 'selected';}?>>White cane</option>
                            </select></span>
                        </div>
                    </div>
                        <br>
                    <div class="row" style="">
                        <div class="form-group col-md-6">
                            <div class="checkbox3 checkbox-success checkbox-inline checkbox-check checkbox-round  checkbox-light pull-right" >
                                <input type="checkbox" id="check10" name="nogivemobility" value="no" <?php if(!isset($reci_givemobility)){ echo 'checked';}?>>
                                <label for="check10">
                                  No Don't Give Mobility
                                </label>
                               </div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="notgiven" id="notgiven" value="<?php echo $reci_row['notgiven']; ?>" placeholder="" class="form-control"/>
                        </div>
                    </div><hr />
                    <div class="row" style="">
                        <div class="col-md-12">
                            <div class="col-md-4"><b>Measure for special wheel chair(0-100 | inches):</b></div>
                            
                            <div class="form-group col-md-2">
                                Back:<input id="back" type="number" min="1" placeholder="Back (0-100)" max="100" name="back" value="<?php echo $reci_row['back']; ?>" class="form-control" /></div>
                            <div class="form-group col-md-2">
                                Thigh:<input id="thigh" type="number" min="1" placeholder="Thigh (0-100)" max="100" name="thigh" value="<?php echo $reci_row['thigh']; ?>" class="form-control" /></div>
                            <div class="form-group col-md-2">
                                Leg:<input id="leg" type="number" min="1" placeholder="Leg (0-100)" max="100" name="leg" value="<?php echo $reci_row['leg']; ?>" class="form-control" /></div> 
                            <div class="form-group col-md-2">Hips:<input id="hips" type="number" min="1" placeholder="Hips width (0-100)" max="100" name="hips" value="<?php echo $reci_row['hips']; ?>" class="form-control" /></div>
                        </div>
                    </div><hr />
                    <div class="row" style="">
                        <div class="form-group col-md-6"> 
                            &nbsp;&nbsp;&nbsp;<b>Sit alone:</b>
                            <div class="pull-right" style="margin-right: 5px">
                               <div class="radio3 radio-check radio-success radio-inline">
                                <input type="radio" id="radio11" name="sit_alone" value="yes" <?php if($reci_sitalone == 'yes'){ echo 'checked';}?>>
                                <label for="radio11">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline">
                                <input type="radio" id="radio12" name="sit_alone" value="no" <?php if($reci_sitalone == 'no'){ echo 'checked';}?>>
                                <label for="radio12">
                                  No
                                </label>
                               </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <span class="col-md-6" style="padding-top: 7px"><b>How often do you go out now?:</b></span>
                            <span class="col-md-6">
                            <select name="often_movement" class="form-control">
                                <option value="" disabled selected style="display: none;">How often do you go out now?</option>
                                <option value="Morning" <?php if($reci_often == 'Morning'){echo 'selected';}?>>Morning</option>
                                <option value="Afternoon" <?php if($reci_often == 'Afternoon'){echo 'selected';}?>>Afternoon</option>
                                <option value="Evening" <?php if($reci_often == 'Evening'){echo 'selected';}?>>Evening</option>
                                <option value="Night" <?php if($reci_often == 'Night'){echo 'selected';}?>>Night</option>
                                <option value="Once a day" <?php if($reci_often == 'Once a day'){echo 'selected';}?>>Once a day</option>
                                <option value="Twice a day" <?php if($reci_often == 'Twice a day'){echo 'selected';}?>>Twice a day</option>
                                <option value="Often" <?php if($reci_often == 'Often'){echo 'selected';}?>>Often</option>
                            </select></span>
                        </div>
                    </div>
                       
                    <!--Tab Panel-->
                        
                   
                        
                        <div class="row" style="">
                            <div class="form-group col-md-12"> 
                             &nbsp;&nbsp;&nbsp;<b>Did you ever think you would get a wheelchair?</b>&nbsp;&nbsp;
                               <div class="radio3 radio-check radio-success radio-inline">
                                <input type="radio" id="radio13" name="did_you_expect" value="yes" <?php if($reci_did_you_expect == 'yes'){ echo 'checked';}?>>
                                <label for="radio13">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline">
                                <input type="radio" id="radio14" name="did_you_expect" value="no" <?php if($reci_did_you_expect == 'no'){ echo 'checked';}?>>
                                <label for="radio14">
                                  No
                                </label>
                               </div>
                            </div>
                        </div>
                        <br />
                        <div class="row" style="">
                             <div class="form-group col-md-6">
                                 <span class="col-md-5" style="padding-top: 7px"><b>Who do you live with?</b></span>
                                 <span class="col-md-7">
                                <select name="live_with" class="form-control">
                                <option value="" disabled selected style="display: none;">Who do you live with?</option>
                                <option value="Mother" <?php if($reci_live_with == 'Mother'){echo 'selected';}?>>Mother</option>
                                <option value="Father" <?php if($reci_live_with == 'Father'){echo 'selected';}?>>Father</option>
                                <option value="Sister" <?php if($reci_live_with == 'Sister'){echo 'selected';}?>>Sister</option>
                                <option value="Brother" <?php if($reci_live_with == 'Brother'){echo 'selected';}?>>Brother</option>
                                <option value="Cousin" <?php if($reci_live_with == 'Cousin'){echo 'selected';}?>>Cousin</option>
                                <option value="Uncle" <?php if($reci_live_with == 'Uncle'){echo 'selected';}?>>Uncle</option>
                                <option value="Aunt" <?php if($reci_live_with == 'Aunt'){echo 'selected';}?>>Aunt</option>
                                <option value="Gurdian" <?php if($reci_live_with == 'Gurdian'){echo 'selected';}?>>Gurdian</option>
                            </select></span>
                            </div>
                            <div class="form-group col-md-6">
                                <span class="col-md-4" style="padding-top: 7px"><b>Who helps you?</b></span>
                                <span class="col-md-8">
                                <select name="helps_you" class="form-control">
                                <option value="" disabled selected style="display: none;">Who helps you?</option>
                                <option value="Mother" <?php if($reci_helps_you == 'Mother'){echo 'selected';}?>>Mother</option>
                                <option value="Father" <?php if($reci_helps_you == 'Father'){echo 'selected';}?>>Father</option>
                                <option value="Sister" <?php if($reci_helps_you == 'Sister'){echo 'selected';}?>>Sister</option>
                                <option value="Brother" <?php if($reci_helps_you == 'Brother'){echo 'selected';}?>>Brother</option>
                                <option value="Cousin" <?php if($reci_helps_you == 'Cousin'){echo 'selected';}?>>Cousin</option>
                                <option value="Uncle" <?php if($reci_helps_you == 'Uncle'){echo 'selected';}?>>Uncle</option>
                                <option value="Aunt" <?php if($reci_helps_you == 'Aunt'){echo 'selected';}?>>Aunt</option>
                                <option value="Gurdian" <?php if($reci_helps_you == 'Gurdian'){echo 'selected';}?>>Gurdian</option>
                                </select></span>
                            </div>
                        </div>
                        <hr />
                        <div class="row" style="">
                             <div class="form-group col-md-6">
                                 &nbsp;&nbsp;&nbsp;&nbsp;<b>Do you work/go to school?</b>
                                 <div class="pull-right">
                              <div class="radio3 radio-check radio-success radio-inline">
                                <input type="radio" id="radio15" name="work_school" value="yes" <?php if($reci_work == 'yes'){ echo 'checked';}?>>
                                <label for="radio15">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline">
                                <input type="radio" id="radio16" name="work_school" value="no" <?php if($reci_work == 'no'){ echo 'checked';}?>>
                                <label for="radio16">
                                  No
                                </label>
                               </div>
                                 </div>
                            </div>
                            <div class="form-group col-md-6">
                                <span class="col-md-3" style="padding-top: 7px"><b>If not, Why?</b></span><span class="col-md-9"><input type="text" name="not_work_school" value="<?php echo $reci_row['not_work_school'];?>" placeholder="" class="form-control"/></span>
                            </div>
                        </div>
                        
                        <div class="row" style="">
                             <div class="form-group col-md-6">
                                 &nbsp;&nbsp;&nbsp;&nbsp;<b>Did you pray for a wheel chair?</b>
                                 <div class="pull-right">
                              <div class="radio3 radio-check radio-success radio-inline">
                                <input type="radio" id="radio17" name="did_pray" value="yes" <?php if($reci_pray == 'yes'){ echo 'checked';}?>>
                                <label for="radio17">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline">
                                <input type="radio" id="radio18" name="did_pray" value="no" <?php if($reci_pray == 'no'){ echo 'checked';}?>>
                                <label for="radio18">
                                  No
                                </label>
                               </div>
                                 </div>
                            </div>
                            <div class="form-group col-md-6"><span class="col-md-9" style="padding-top: 7px"><b>How will your life change</b></span>
                                <span class="col-md-12">
                                <input type="text" name="How_life_change" placeholder="" value="<?php echo $reci_row['how_life_change'];?>" class="form-control"/></span>
                            </div>
                        </div>
                        <br />
                        <div class="row" style="">
                             <div class="form-group col-md-6">
                                 <span class="col-md-9" style="padding-top: 7px"><b>Thanks giving message in words</b></span>
                                 <span class="col-md-12">
                                <input type="text" placeholder="" name="thanks" value="<?php echo $reci_row['thanks'];?>" class="form-control"/></span>
                            </div>
                        </div>
                        <hr />
                        
                        <div class="row" style="">
                             <div class="form-group col-md-6">
                                &nbsp;&nbsp;&nbsp;&nbsp;<b>Already saved:</b>&nbsp;&nbsp;
                              <div class="radio3 radio-check radio-success radio-inline">
                                <input type="radio" id="radio19" name="already_saved" value="yes" <?php if($reci_already_saved == 'yes'){ echo 'checked';}?>>
                                <label for="radio19">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline">
                                <input type="radio" id="radio20" name="already_saved" value="no" <?php if($reci_already_saved == 'no'){ echo 'checked';}?>>
                                <label for="radio20">
                                  No
                                </label>
                               </div>
                            </div>
                            <div class="form-group col-md-6">
                                <b>Got saved:</b>&nbsp;&nbsp;&nbsp;
                              <div class="radio3 radio-check radio-success radio-inline">
                                <input type="radio" id="radio21" name="got_saved" value="yes" <?php if($reci_got_saved == 'yes'){ echo 'checked';}?>>
                                <label for="radio21">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline">
                                <input type="radio" id="radio22" name="got_saved" value="no" <?php if($reci_got_saved == 'no'){ echo 'checked';}?>>
                                <label for="radio22">
                                  No
                                </label>
                               </div>
                            </div>
                        </div>
                        
                        <div class="row" style="">
                             <div class="form-group col-md-12">
                                &nbsp;&nbsp;&nbsp;&nbsp;<b>Family member got saved:</b>&nbsp;&nbsp;&nbsp;
                              <div class="radio3 radio-check radio-success radio-inline">
                                <input type="radio" id="radio23" name="family_saved" value="yes" <?php if($reci_family_saved == 'yes'){ echo 'checked';}?>>
                                <label for="radio23">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline">
                                <input type="radio" id="radio24" name="family_saved" value="no" <?php if($reci_family_saved == 'no'){ echo 'checked';}?>>
                                <label for="radio24">
                                  No
                                </label>
                               </div>
                            </div>
                            
                        </div>
                        
                        <!--Tab Panel-->
                        
                          <!--<div class="row" style="">
                            <div class="form-group col-md-6">
                                Before Image:<input type="file" name="files[]" class="form-control" />
                            
                                After Image:<input type="file" name="files[]" class="form-control" />
                            </div>
                           </div>-->
                        <hr />
                           <div class="row" style="">
                            <div class="form-group col-md-6">
                            &nbsp;&nbsp;&nbsp;&nbsp;<b>Follow Up:</b>
                                <div class="radio3 radio-check radio-success radio-inline">
                                <input type="radio" id="radio25" name="follow" value="1" <?php if($reci_followup == '1'){ echo 'checked';}?>>
                                <label for="radio25">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline">
                                <input type="radio" id="radio26" name="follow" value="0" <?php if($reci_followup == '0'){ echo 'checked';}?>>
                                <label for="radio26">
                                  No
                                </label>
                               </div>
                            <input type="number" name="distrib_id" value="<?php echo $distrib_id;?>" hidden="hidden" />
                            <input type="number" name="reci_id" value="<?php echo $reci_id;?>" hidden="hidden" />
                            </div>
                           </div>
                           <br />
                           <div class="form-group col-md-6 pull-left">
                              <input type="submit" class="btn btn-primary" value="Update Recipient Details" />
                           </div>
                        
                    </form>
                
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <!--</div>-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.metisMenu.js"></script>
        <script type="text/javascript" src="js/sliding.form.js"></script>
        <script src="js/custom-scripts.js"></script>
        <script>
            $(document).ready(function(){
               $('#nalreadyhas').select(function(){
                   $('#whyhas').addClass('opac');
               });
                $('#yalreadyhas').click(function(){
                   $('#whyhas').removeClass('opac');
               });
                
                
               $('#neverhad').click(function(){
                   $('#whyhad').addClass('opac');
               });
                $('#yeverhad').click(function(){
                   $('#whyhad').removeClass('opac');
               });
                
                
               $('#givemobility').change(function(){
                  $('#notgiven').addClass('opac');
               });
                
                
               $('#cng').change(function(){
                  $('#notgiven').removeClass('opac');
               });
                
                
               $('#ywork_school').click(function(){
                  $('#not_school_work').addClass('opac');
               });
               $('#nwork_school').click(function(){
                  $('#not_school_work').removeClass('opac');
               });
            });
        </script>
        
    </body>
</html>
<?php
    } else {
        redirect_to("welcome.php");
    }
?>