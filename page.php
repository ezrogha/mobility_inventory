<?php
    require_once "includes/connect.php";
    require_once "includes/functions.php";
    
    session_start();

    if(!isset($_SESSION['user'])){
        redirect_to("home.php");
    }

    if(isset($_GET['distrib_id'])){
        $distrib_id = $_GET['distrib_id'];
        
        $distrib_sql = "SELECT * FROM distribution WHERE id='{$distrib_id}'";
        $distrib_result = mysqli_query($connect, $distrib_sql);
        $distrib_row= mysqli_fetch_array($distrib_result);
        $district = $distrib_row['district'];
        $distribution = $distrib_row['distribution'];
        
        $sql = "SELECT * FROM district WHERE district = '{$district}'";
        $sub_result = mysqli_query($connect, $sql);
        
        $district_result = mysqli_query($connect, "SELECT * FROM all_districts WHERE district = '$district' LIMIT 1") or die(mysqli_error($connect));
        $district_row = mysqli_fetch_array($district_result);
            
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
            .fh {
                transition: 0.2s;
            }
            .fh:hover {
                transform: scale(5) translate(15px, 13px);
            }
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
            #gotop {
                position: absolute;
                right: 35px;
                font-size: 30px;
                top: 95%;
            } 
            #gotop:hover {
                text-decoration: none;
            }
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
              <?php if($_SESSION['user'] == 'volunteer'){?>
              <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><a href="welcome.php">Distribution</a></li>
              <li class="active">Add Recipient</li>
            </ol> 
              <?php } else { ?>
            <ol class="breadcrumb">
              <li><a href="index2.php?distrib_id=<?php echo $distrib_id; ?>"><?php echo $distribution; ?></a></li>
              <li><a href="all_recipients.php?distrib_id=<?php echo $distrib_id; ?>">Recipients</a></li>
              <li class="active">Add Recipient</li>
            </ol> 
              <?php } ?>
		 </div>
            <div id="page-inner">
            <div class="row">
            <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-body">
            
            <div id="pwrapper" style="width: 100%">
                
                    <form method="post" action="process.php" enctype="multipart/form-data" autocomplete="off">
                        
              
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" name="fullname" class="form-control" placeholder="Fullname" required />
                        </div>
                        <div class="form-group col-md-6">
                            <input type="tel" name="phone" class="form-control" placeholder="Phone" required/>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="number" name="age" class="form-control" placeholder="Age" required/>
                        </div>
                        <div class="form-group col-md-6">
                            <b>Gender:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           <div class="radio3 radio-check radio-inline">
                            <input type="radio" id="radio4" name="gender" value="male" required>
                            <label for="radio4">
                              Male
                            </label>
                          </div>
                          <div class="radio3 radio-check radio-warning radio-inline">
                            <input type="radio" id="radio5" name="gender" value="female" required>
                            <label for="radio5">
                              Female
                            </label>
                           </div>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" name="district" class="form-control" placeholder="District" value="<?php echo $district; ?>" disabled/>
                            <input type="text" name="district" placeholder="District" value="<?php echo $district; ?>" hidden="hidden"/>
                        </div>
                        <div class="form-group col-md-6">
                            <select name="subcounty" class="form-control">
                                <option value="" disabled selected style="display:none">--SUB COUNTY--</option>
                                <?php while($sub_row = mysqli_fetch_array($sub_result)){ 
                                    echo "<option value=\"".$sub_row['subcounty']."\">".$sub_row['subcounty']."</option>";
                                 } ?>
                            </select>
                        </div>
                    </div>
                        
                        <input type="text" name="distribution" value="<?php echo $distribution;?>" hidden="hidden" />
                        
                    <div class="row">
                        <div class="form-group col-md-12">
                            <textarea name="disabilitystory" class="form-control" placeholder="Story" rows="4" required></textarea>
                        </div>
                    </div>  
                        
                   <div class="row">
                        <div class="form-group col-md-6">
                            <select name="disability" class="form-control" required>
                                <option value="" disabled selected style="display: none;">Disability</option>
                                <option value="Amputation">Amputation</option>
                                <option value="Celebral Paisy">Celebral Paisy</option>
                                <option value="Hydrocephalus">Hydrocephalus</option>
                                <option value="Muscular Dystrophy">Muscular Dystrophy</option>
                                <option value="Paralysis">Paralysis</option>
                                <option value="Spinal Bifida">Spinal Bifida</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                       <div class="form-group col-md-6">
                            <select name="causeofdisability" class="form-control" required>
                                <option value="" disabled selected style="display: none;">Cause of Disability</option>
                                <option value="Accident">Accident</option>
                                <option value="Birth Defect/Trauma">Birth Defect/Trauma</option>
                                <option value="Malaria">Malaria</option>
                                <option value="Polio">Polio</option>
                                <option value="Stroke">Stroke</option>
                                <option value="Old Age">Old Age</option>
                                <option value="Cancer">Cancer</option>
                                <option value="Unknown/Other">Unknown/Other</option>
                            </select>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="form-group col-md-6">
                            <select name="currentmobility" class="form-control" required>
                                <option value="" disabled selected style="display: none;">Current Mobility Method</option>
                                <option value="crawls">Crawls</option>
                                <option value="carried">Carried</option>
                                <option value="crutches">Crutches</option>
                                <option value="Walks with difficulty">Walks with difficulty</option>
                                <option value="Old Wheel Chair">Old Wheel Chair</option>
                                <option value="others">others</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            
                        </div>
                      </div>
                        
                     <div class="row" style="">
                        <div class="form-group col-md-6"> 
                            <b>Do you already have a wheelchair:</b>
                            <div class="pull-right" style="margin-right: 5px">
                               <div class="radio3 radio-check radio-success radio-inline" id="yalreadyhas">
                                <input type="radio" id="radio6" name="alreadyhas" value="yes" >
                                <label for="radio6">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline" id="nalreadyhas">
                                <input type="radio" id="radio7" name="alreadyhas" value="no" checked>
                                <label for="radio7">
                                  No
                                </label>
                               </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <input id="whyhas" type="text" name="whyhas" placeholder="If yes, expain:" class="form-control"/>
                        </div>
                    </div>
                    
                    <!--Tab Panel-->
                        
                       <div class="row" style="">
                        <div class="form-group col-md-6"> 
                            <b>Have you ever had a wheelchair:</b>
                            <div class="pull-right" style="margin-right: 5px">
                               <div class="radio3 radio-check radio-success radio-inline" id="yeverhad">
                                <input type="radio" id="radio8" name="everhad" value="yes">
                                <label for="radio8">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline"  id="neverhad">
                                <input type="radio" id="radio9" name="everhad" value="no" checked>
                                <label for="radio9">
                                  No
                                </label>
                               </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="whyhad" id="whyhad" placeholder="If yes, expain:" class="form-control"/>
                        </div>
                    </div><hr />
                    <div class="row" style="">
                        <div class="form-group col-md-6">
                            <input type="text" name="whywantchair" class="form-control" placeholder="Why do you want a mobility device?" required/>
                        </div>
                        <div class="form-group col-md-6">
                            <select name="givemobility" class="form-control" id="givemobility">
                                <option value="" > -- Give Mobility -- </option>
                                <option value="gen1">GEN1</option>
                                <option value="gen2_s_13">GEN2: S</option>
                                <option value="gen2_m_17">GEN2: M</option>
                                <option value="gen2_l_18_5">GEN2: L</option>
                                <option value="gen2_xl_20">GEN2: XL</option>
                                <option value="gen3_s_13">GEN3: S</option>
                                <option value="gen3_m_17">GEN3: M</option>
                                <option value="gen3_l_18_5">GEN3: L</option>
                                <option value="gen3_xl_20">GEN3: XL</option>
                                <option value="jaf">JAF</option>
                                <option value="hb_11">HB 11</option>
                                <option value="hb_13">HB 13</option>
                                <option value="crutches">Crutches</option>
                                <option value="cane">Cane</option>
                                <option value="walkers">Walker</option>
                                <option value="white_cane">White cane</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="" id="noGive">
                        <div class="form-group col-md-6">
                            <div class="checkbox3 checkbox-success checkbox-inline checkbox-check checkbox-round  checkbox-light pull-right" >
                                <input type="checkbox" id="check10" name="nogivemobility" value="no" >
                                <label for="check10">
                                  No Don't Give Mobility
                                </label>
                               </div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="notgiven" id="notgiven" value="" placeholder="Explain Why" class="form-control"/>
                        </div>
                    </div><hr />
                    <div class="row" style="">
                        <div class="col-md-12">
                            <div class="col-md-4"><b>Measure for special wheel chair(0-100 | inches):</b></div>
                            
                            <div class="form-group col-md-2">
                                Back:<input id="back" type="number" min="1" placeholder="Back (0-100)" max="100" name="back" value="" class="form-control" /></div>
                            <div class="form-group col-md-2">
                                Thigh:<input id="thigh" type="number" min="1" placeholder="Thigh (0-100)" max="100" name="thigh" value="" class="form-control" /></div>
                            <div class="form-group col-md-2">
                                Leg:<input id="leg" type="number" min="1" placeholder="Leg (0-100)" max="100" name="leg" value="" class="form-control" /></div> 
                            <div class="form-group col-md-2">Hips:<input id="hips" type="number" min="1" placeholder="Hips width (0-100)" max="100" name="hips" value="" class="form-control" /></div>
                        </div>
                    </div><hr />
                    <div class="row" style="">
                        <div class="form-group col-md-6"> 
                            &nbsp;&nbsp;&nbsp;<b>Sit alone:</b>
                            <div class="pull-right" style="margin-right: 5px">
                               <div class="radio3 radio-check radio-success radio-inline">
                                <input type="radio" id="radio11" name="sit_alone" value="yes" required>
                                <label for="radio11">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline">
                                <input type="radio" id="radio12" name="sit_alone" value="no" checked required>
                                <label for="radio12">
                                  No
                                </label>
                               </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <select name="often_movement" class="form-control" required>
                                <option value="" disabled selected style="display: none;">How often do you go out now?</option>
                                <option value="Morning">Morning</option>
                                <option value="Afternoon">Afternoon</option>
                                <option value="Evening">Evening</option>
                                <option value="Night">Night</option>
                                <option value="Once a day">Once a day</option>
                                <option value="Twice a day">Twice a day</option>
                                <option value="Often">Often</option>
                            </select>
                        </div>
                    </div>
                       
                    <!--Tab Panel-->
                        
                   
                        
                        <div class="row" style="">
                            <div class="form-group col-md-12"> 
                             <b>Did you ever think you would get a wheelchair?</b>&nbsp;&nbsp;&nbsp;
                               <div class="radio3 radio-check radio-success radio-inline">
                                <input type="radio" id="radio13" name="did_you_expect" value="yes" required>
                                <label for="radio13">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline">
                                <input type="radio" id="radio14" name="did_you_expect" value="no" checked required>
                                <label for="radio14">
                                  No
                                </label>
                               </div>
                            </div>
                        </div>
                        
                        <div class="row" style="">
                             <div class="form-group col-md-6">
                                <select name="live_with" class="form-control" required>
                                <option value="" disabled selected style="display: none;">Who do you live with?</option>
                                <option value="Mother">Mother</option>
                                <option value="Father">Father</option>
                                <option value="Sister">Sister</option>
                                <option value="Brother">Brother</option>
                                <option value="Cousin">Cousin</option>
                                <option value="Uncle">Uncle</option>
                                <option value="Aunt">Aunt</option>
                                <option value="Gurdian">Gurdian</option>
                            </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="helps_you" class="form-control" required>
                                <option value="" disabled selected style="display: none;">Who helps you?</option>
                                <option value="Mother">Mother</option>
                                <option value="Father">Father</option>
                                <option value="Sister">Sister</option>
                                <option value="Brother">Brother</option>
                                <option value="Cousin">Cousin</option>
                                <option value="Uncle">Uncle</option>
                                <option value="Aunt">Aunt</option>
                                <option value="Gurdian">Gurdian</option>
                                </select>
                            </div>
                        </div>
                        <hr />
                        <div class="row" style="">
                             <div class="form-group col-md-6">
                                 <b>Do you work/go to school?</b>
                                 <div class="pull-right">
                              <div class="radio3 radio-check radio-success radio-inline" id="ywork_school">
                                <input type="radio" id="radio15" name="work_school" value="yes">
                                <label for="radio15">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline" id="nwork_school">
                                <input type="radio" id="radio16" name="work_school" value="no" checked>
                                <label for="radio16">
                                  No
                                </label>
                               </div>
                                 </div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="not_work_school" id="work_school" value="" placeholder="If not, Why" class="form-control"/>
                            </div>
                        </div>
                        
                        <div class="row" style="">
                             <div class="form-group col-md-6">
                                 <b>Did you pray for a wheel chair?</b>
                                 <div class="pull-right">
                              <div class="radio3 radio-check radio-success radio-inline">
                                <input type="radio" id="radio17" name="did_pray" value="yes" required>
                                <label for="radio17">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline">
                                <input type="radio" id="radio18" name="did_pray" value="no" checked required>
                                <label for="radio18">
                                  No
                                </label>
                               </div>
                                 </div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="How_life_change" placeholder="How will your life change" class="form-control"/>
                            </div>
                        </div>
                        
                        <div class="row" style="">
                             <div class="form-group col-md-6">
                                <input type="text" placeholder="Thanks giving message in words" name="thanks" class="form-control"/>
                            </div>
                        </div>
                        <hr />
                        
                        <div class="row" style="">
                             <div class="form-group col-md-6">
                                <b>Already saved:</b>&nbsp;&nbsp;
                              <div class="radio3 radio-check radio-success radio-inline">
                                <input type="radio" id="radio19" name="already_saved" value="yes" required>
                                <label for="radio19">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline">
                                <input type="radio" id="radio20" name="already_saved" value="no" checked required>
                                <label for="radio20">
                                  No
                                </label>
                               </div>
                            </div>
                            <div class="form-group col-md-6">
                                <b>Got saved:</b>&nbsp;&nbsp;&nbsp;
                              <div class="radio3 radio-check radio-success radio-inline">
                                <input type="radio" id="radio21" name="got_saved" value="yes" required>
                                <label for="radio21">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline">
                                <input type="radio" id="radio22" name="got_saved" value="no" checked required>
                                <label for="radio22">
                                  No
                                </label>
                               </div>
                            </div>
                        </div>
                        
                        <div class="row" style="">
                             <div class="form-group col-md-12">
                                <b>Family member got saved:</b>&nbsp;&nbsp;&nbsp;
                              <div class="radio3 radio-check radio-success radio-inline">
                                <input type="radio" id="radio23" name="family_saved" value="yes" required>
                                <label for="radio23">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline">
                                <input type="radio" id="radio24" name="family_saved" value="no" checked required>
                                <label for="radio24">
                                  No
                                </label>
                               </div>
                            </div>
                            
                        </div>
                        
                        <!--Tab Panel-->
                        
                          <div class="row" style="">
                            <div class="form-group col-md-6">
                                Before Image:<input type="file" name="files[]" class="form-control" required/>
                            
                                After Image:<input type="file" name="files[]" class="form-control" required/>
                            </div>
                           </div>
                           <div class="row" style="">
                            <div class="form-group col-md-6">
                            Follow Up:
                                <div class="radio3 radio-check radio-success radio-inline">
                                <input type="radio" id="radio25" name="follow" value="1">
                                <label for="radio25">
                                  Yes
                                </label>
                              </div>
                              <div class="radio3 radio-check radio-danger radio-inline">
                                <input type="radio" id="radio26" name="follow" value="0" checked>
                                <label for="radio26">
                                  No
                                </label>
                               </div>
                            
                            </div>
                           </div>
                           
                           <div class="form-group col-md-6 pull-right">
                              <input type="submit" class="btn btn-primary" value="Add Recipient" />
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
        <script src="js/custom-scripts.js"></script>
        <script>
            /*function removeSelection(){
                if(this.options[this.selectedIndex].value = ""){
                        document.getElementById('noGive').style.opacity='block';
                } else {
                    document.getElementById('noGive').style.opacity=0;
                }
            }*/
            $(document).ready(function(){
               /*$('<a class="btn btn-primary" id="ghi">Button</a>').insertAfter('input[type=submit]');
                $('#ghi').click(function(){
                   $('#nalreadyhas').hide(); 
                });*/
                $('#whyhas').hide('fast'); 
                $('#whyhad').hide('fast'); 
                $('#nalreadyhas').click(function(){
                   $('#whyhas').hide('fast'); 
                });
                $('#yalreadyhas').click(function(){
                   $('#whyhas').show('fast'); 
                });
                
                $('#neverhad').click(function(){
                   $('#whyhad').hide('fast'); 
                });
                $('#yeverhad').click(function(){
                   $('#whyhad').show('fast'); 
                });
                
                $('#ywork_school').click(function(){
                   $('#work_school').hide('fast'); 
                });
                $('#nwork_school').click(function(){
                   $('#work_school').show('fast'); 
                });
                /*$('<a href="#top" id="gotop">BOTTOM</a>').insertAfter('body');
                $('<span id="top"></span>').insertAfter('body');*/
            });
            
        </script>
        
    </body>
</html>
<?php
    } else {
        redirect_to("welcome.php");
    }
?>