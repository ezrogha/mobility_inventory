<?php
    require_once "includes/connect.php";
    require_once "includes/functions.php";
    session_start();

    if(!isset($_SESSION['user'])){
        redirect_to("home.php");
    }

    $recipient_num = 0;
    $result = mysqli_query($connect, "SELECT distribution FROM distribution") or die(mysqli_error($connect));
    while($row = mysqli_fetch_array($result)){
        global $recipient_num;
        $distribution = $row['distribution'];
        $distrib_result = mysqli_query($connect, "SELECT * FROM $distribution WHERE followup = 0");
        $distrib_num = mysqli_num_rows($distrib_result);
        $recipient_num = $recipient_num + $distrib_num;
    }

    $wait_num = 0;
    $wait_result = mysqli_query($connect, "SELECT distribution FROM distribution") or die(mysqli_error($connect));
    while($row = mysqli_fetch_array($wait_result)){
        global $wait_num;
        $wdistribution = $row['distribution'];
        $wdistrib_result = mysqli_query($connect, "SELECT * FROM $wdistribution WHERE followup = 1");
        $wdistrib_num = mysqli_num_rows($wdistrib_result);
        $wait_num = $wait_num + $wdistrib_num;
    }

    

    $d_sql = "SELECT * FROM all_districts";
    $d_result = mysqli_query($connect, $d_sql);
    $district_num = mysqli_num_rows($d_result);

    $distri_sql = "SELECT * FROM distribution";
    $distri_result = mysqli_query($connect, $distri_sql) or die(mysqli_error($connect));
    $distri_num = mysqli_num_rows($distri_result);
    
    $v_sql = "SELECT * FROM volunteer";
    $v_result = mysqli_query($connect, $v_sql);
    $volunteer_num = mysqli_num_rows($v_result);

    $s_sql = "SELECT * FROM staff";
    $s_result = mysqli_query($connect, $s_sql);
    $staff_num = mysqli_num_rows($s_result);

    $cane_sql = "SELECT available FROM cane ORDER BY id DESC LIMIT 1";
    $cane_result = mysqli_query($connect, $cane_sql);
    $cane_row = mysqli_fetch_array($cane_result);
    $cane_num = $cane_row['available'];
    
    $wcane_sql = "SELECT available FROM white_cane ORDER BY id DESC LIMIT 1";
    $wcane_result = mysqli_query($connect, $wcane_sql);
    $wcane_row = mysqli_fetch_array($wcane_result);
    $wcane_num = $wcane_row['available'];
    
    $walker_sql = "SELECT available FROM walkers ORDER BY id DESC LIMIT 1";
    $walker_result = mysqli_query($connect, $walker_sql);
    $walker_row = mysqli_fetch_array($walker_result);
    $walker_num = $walker_row['available'];
    
    $crutches_sql = "SELECT available FROM crutches ORDER BY id DESC LIMIT 1";
    $crutches_result = mysqli_query($connect, $crutches_sql);
    $crutches_row = mysqli_fetch_array($crutches_result);
    $crutches_num = $crutches_row['available'];
    
    $gen1_sql = "SELECT available FROM gen1 ORDER BY id DESC LIMIT 1";
    $gen1_result = mysqli_query($connect, $gen1_sql);
    $gen1_row = mysqli_fetch_array($gen1_result);
    $gen1_num = $gen1_row['available'];
    
    $gen2_s_13_sql = "SELECT available FROM gen2_s_13 ORDER BY id DESC LIMIT 1";
    $gen2_s_13_result = mysqli_query($connect, $gen2_s_13_sql);
    $gen2_s_13_row = mysqli_fetch_array($gen2_s_13_result);
    $gen2_s_13_num = $gen2_s_13_row['available'];
    
    $gen2_m_17_sql = "SELECT available FROM gen2_m_17 ORDER BY id DESC LIMIT 1";
    $gen2_m_17_result = mysqli_query($connect, $gen2_m_17_sql);
    $gen2_m_17_row = mysqli_fetch_array($gen2_m_17_result);
    $gen2_m_17_num = $gen2_m_17_row['available'];
    
    $gen2_l_18_5_sql = "SELECT available FROM gen2_l_18_5 ORDER BY id DESC LIMIT 1";
    $gen2_l_18_5_result = mysqli_query($connect, $gen2_l_18_5_sql);
    $gen2_l_18_5_row = mysqli_fetch_array($gen2_l_18_5_result);
    $gen2_l_18_5_num = $gen2_l_18_5_row['available'];
    
    $gen2_xl_20_sql = "SELECT available FROM gen2_xl_20 ORDER BY id DESC LIMIT 1";
    $gen2_xl_20_result = mysqli_query($connect, $gen2_xl_20_sql);
    $gen2_xl_20_row = mysqli_fetch_array($gen2_xl_20_result);
    $gen2_xl_20_num = $gen2_xl_20_row['available'];
    
    $gen3_s_13_sql = "SELECT available FROM gen3_s_13 ORDER BY id DESC LIMIT 1";
    $gen3_s_13_result = mysqli_query($connect, $gen3_s_13_sql);
    $gen3_s_13_row = mysqli_fetch_array($gen3_s_13_result);
    $gen3_s_13_num = $gen3_s_13_row['available'];
    
    $gen3_m_17_sql = "SELECT available FROM gen3_m_17 ORDER BY id DESC LIMIT 1";
    $gen3_m_17_result = mysqli_query($connect, $gen3_m_17_sql);
    $gen3_m_17_row = mysqli_fetch_array($gen3_m_17_result);
    $gen3_m_17_num = $gen3_m_17_row['available'];
    
    $gen3_l_18_5_sql = "SELECT available FROM gen3_l_18_5 ORDER BY id DESC LIMIT 1";
    $gen3_l_18_5_result = mysqli_query($connect, $gen3_l_18_5_sql);
    $gen3_l_18_5_row = mysqli_fetch_array($gen3_l_18_5_result);
    $gen3_l_18_5_num = $gen3_l_18_5_row['available'];
    
    $gen3_xl_20_sql = "SELECT available FROM gen3_xl_20 ORDER BY id DESC LIMIT 1";
    $gen3_xl_20_result = mysqli_query($connect, $gen3_xl_20_sql);
    $gen3_xl_20_row = mysqli_fetch_array($gen3_xl_20_result);
    $gen3_xl_20_num = $gen3_xl_20_row['available'];

    $jaf_sql = "SELECT available FROM jaf ORDER BY id DESC LIMIT 1";
    $jaf_result = mysqli_query($connect, $jaf_sql);
    $jaf_row = mysqli_fetch_array($jaf_result);
    $jaf_num = $jaf_row['available'];

    $hb_11_sql = "SELECT available FROM hb_11 ORDER BY id DESC LIMIT 1";
    $hb_11_result = mysqli_query($connect, $hb_11_sql);
    $hb_11_row = mysqli_fetch_array($hb_11_result);
    $hb_11_num = $hb_11_row['available'];

    $hb_13_sql = "SELECT available FROM hb_13 ORDER BY id DESC LIMIT 1";
    $hb_13_result = mysqli_query($connect, $hb_13_sql);
    $hb_13_row = mysqli_fetch_array($hb_13_result);
    $hb_13_num = $hb_13_row['available'];

    
    
    $inventory_num = $gen1_num + $gen3_xl_20_num + $gen3_l_18_5_num + $gen3_m_17_num + $gen3_s_13_num + $gen2_xl_20_num + $gen2_l_18_5_num + $gen2_m_17_num + $gen2_s_13_num + $cane_num + $wcane_num + $walker_num + $crutches_num + $jaf_num + $hb_11_num + $hb_13_num;
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <title>Father's Heart</title>
        
        <link rel="shortcut icon" href="images/FHMM.png" type="text/css" />
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/font-awesome.css" rel="stylesheet" />
        <link href="css/custom-styles.css" rel="stylesheet" />
        <style>
            .fh {
                transition: 0.2s;
            }
            .fh:hover {
                transform: scale(5) translate(15px, 13px);
            }
            .panel-primary{
                transition: 0.3s;
            }
            .panel-primary:hover {
                cursor: default;
                box-shadow: 2px 2px 5px #999;
                transform: translate(-2px, -2px);
                /*transform: scale(1.1, 1.1);*/
            }
            .b:hover {
                cursor: default;
            }
            ul#recipients{
                list-style: none;
                padding: 0;
                margin: 0;
                height: 350px;
                width: 100%;
                overflow: hidden;
            }

            ul#recipients li{
                list-style: none;
                margin: 0;
                padding: 0;
                height: 350px;
                width: 100%;
                background-color: #daa81d;
                position: relative;
            }

            ul#recipients li img{
                position: absolute;
                left: 0;
                top: 0;
                width: 60%;
                /*height: 350px;*/
            }

            ul#recipients li .title{
                margin-left: 60%;
                padding: 10px;
                width: 40%;
                font-weight: bold;
                font-size: 1.2em;
                background-color: #3e3e3e;
                color: #ededed;
                overflow: hidden;
            }

            ul#recipients li .thanks{
                margin-left: 60%;
                padding: 10px 17px 0 10px;
                width: 40%;
                font-weight: bold;
                background-color: #daa81d;
                color: #ededed;
            }

            #recipients-controls button{
                margin: 0 10px 10px 0;
                float: left;
            }
            #page-inner {
                padding-top: 0;
                margin-top: 0;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <?php include "includes/header.php"; ?>
        <div id="page-wrapper">
		  <div class="header"> 
            <h1 class="page-header" style="padding-bottom: 0px;">
                <!--Home <small>Welcome</small>-->
            </h1> 
            <!--<ol class="breadcrumb">
              <li class="active">Home</li>
            </ol> -->
									
		 </div>
            <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <ul id="recipients">
                        <?php
                            $dis_result = mysqli_query($connect, "SELECT * FROM distribution");
                            while($dis_row = mysqli_fetch_array($dis_result)){
                                $distrib = $dis_row['distribution'];
                                $rec_result = mysqli_query($connect, "SELECT * FROM $distrib");
                                while($rec_row = mysqli_fetch_array($rec_result)){
                                    $after = $rec_row['afterr'];
                                    $name = $rec_row['fullname'];
                                    $age = $rec_row['age'];
                                    $district = $rec_row['district'];
                                    $story = $rec_row['disabilitystory'];
                                    $thankz = $rec_row['thanks'];
                            ?>
                                    <li>
                                        <img src="<?php echo $after; ?>" alt="<?php echo $name; ?>" />
                                        <div class="title"><?php echo $name . " - " . $age . " years."; ?></div>
                                        <div class="thanks">
                                            <?php echo $district . " - " . $distrib . "<br><br>"; ?>
                                            <?php echo $story . "<br><br>" .$thankz; ?>
                                        </div>
                                    </li>
                                <?php }
                            }
                        ?>
                        </ul>
                    </div>
                </div>
                <br />
                <div class="row">
                    <?php if($_SESSION['user'] == 'volunteer'){
    
                    } else {?>
                    <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <a href="inventory.php" class="b">
                        <div class="panel panel-primary">
                        
						<div class="number">
							<h3>
								<h3><?php echo $inventory_num;?></h3>
								<small>Inventory</small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-eye fa-5x red"></i>
						</div>
		                
                        </div>
                        </a>
						</div>
                    </div>
                    
                    <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <a href="recipients_all.php" class="b">
                        <div class="panel panel-primary">
                        
						<div class="number">
							<h3>
								<h3><?php echo $recipient_num; ?></h3>
								<small>Recipients</small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-wheelchair fa-5x blue"></i>
						</div>
		                
                        </div>
                        </a>
						</div>
                    </div>
                    <?php } ?>
					
					       <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <a href="welcome.php" class="b">
                        <div class="panel panel-primary">
                        
						<div class="number">
							<h3>
								<h3><?php echo $distri_num; ?></h3>
								<small>Distributions</small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-comments fa-5x green"></i>
						</div>
		                
                        </div>
                        </a>
						</div>
                    </div>
					<?php if($_SESSION['user']=='partner' || $_SESSION['user']=='staff'){; ?>
                    <?php if($_SESSION['user']=='staff'){
    
                    } else {?>
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <a href="staff.php" class="b">
                        <div class="panel panel-primary">
                        
						<div class="number">
							<h3>
								<h3><?php echo $staff_num; ?></h3>
								<small>Staff</small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-user fa-5x purple"></i>
						</div>
		                
                        </div>
                        </a>
						</div>
                    </div>
                </div>
                    <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <a href="signup.php" class="b">
                        <div class="panel panel-primary">
                        
						<div class="number">
							<h3>
								<h3><?php echo $volunteer_num; ?></h3>
								<small>Volunteers</small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-user fa-5x yellow"></i>
						</div>
		                
                        </div>
                        </a>
						</div>
                    </div>
                    <?php } ?>
                    <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <a href="wait_list.php" class="b">
                        <div class="panel panel-primary">
                        
						<div class="number">
							<h3>
								<h3><?php echo $wait_num; ?></h3>
								<small>Wait List</small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-list fa-5x maroon"></i>
						</div>
		                
                        </div>
                        </a>
						</div>
                    </div>
                    <?php } else if ($_SESSION['user']=='volunteer') {; ?>
                        &nbsp;
                    <?php }; ?>
				   <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Upcoming Events
                            </div>
                            <div class="panel-body">
                                <div class="list-group">

                                    <!--<a href="#" class="list-group-item">
                                        <span class="badge">7 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">16 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">36 minutes ago</span>
                                        <i class="fa fa-fw fa-globe"></i> Invoice 653 has paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1.23 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>-->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
			
		
				<footer>
                    <p></p>
				</footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.metisMenu.js"></script>
        <script src="js/jquery.cycle.all.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script>
            $(document).ready(function(){
                //cycle defaults
                $.fn.cycle.defaults.timeout = 10000;
                $.fn.cycle.defaults.random = true;


                $('#recipients').cycle({
                    timeout: 2000,//Time before transition
                    speed: 200,// time during transition
                    pause: true
                });
            });   
        </script>
        <script src="js/custom-scripts.js"></script>
        <script>
            $(document).ready(function(){
               $('li a[href^="index"]').addClass('active-menu')
            });
        </script>
    </body>
</html>