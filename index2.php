<?php
    require_once "includes/connect.php";
    require_once "includes/functions.php";
    session_start();

    if(!isset($_SESSION['user'])){
        redirect_to("home.php");
    }

    if(isset($_GET['distrib_id'])){
        
    $id = $_GET['distrib_id'];
    $distrib_result = mysqli_query($connect, "SELECT * FROM distribution WHERE id = $id");
    $distrib_row = mysqli_fetch_array($distrib_result);
    $distribution = $distrib_row['distribution'];
    $distrib_id = $distrib_row['id'];

    $sql = "SELECT * FROM $distribution WHERE followup = 0";
    $result = mysqli_query($connect, $sql);
    $recipient_num = mysqli_num_rows($result);

    $wait = "SELECT * FROM $distribution WHERE followup = 1";
    $wait_result = mysqli_query($connect, $wait) or 
        die(mysqli_error($connect));
    $wait_num = mysqli_num_rows($wait_result);
    
    
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
            
        </style>
    </head>
    <body>
        <div id="wrapper">
            <?php include "includes/header.php"; ?>
        <div id="page-wrapper">
		  <div class="header"> 
            <h1 class="page-header">
                <?php echo $distribution;?><small>Home</small>
            </h1> 
            <ol class="breadcrumb">
              <li class="active"><a href="welcome.php">Distributions</a></li>
              <li class="active"><?php echo $distribution;?></li>
            </ol> 
									
		 </div>
            <div id="page-inner">

                <!-- /. ROW  -->
	
                <div class="row">
                    
                    <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <a href="all_recipients.php?distrib_id=<?php echo $distrib_id; ?>" class="b">
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
					       
                    <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <a href="wait_list2.php?distrib_id=<?php echo $distrib_id; ?>&w=093_q298" class="b">
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
                    <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <a href="reports3.php?distrib_id=<?php echo $distrib_id;?>" class="b">
                        <div class="panel panel-primary">
                        
						<div class="number">
							<h3>
								<h3><?php echo ""; ?></h3>
								<small>Reports</small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-bar-chart-o green"></i>
						</div>
		                
                        </div>
                        </a>
						</div>
                    </div>
                    </div>
                    <div class="row">
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
        <script src="js/custom-scripts.js"></script>
        <script>
            $(document).ready(function(){
               $('li a[href^="index"]').addClass('active-menu')
            });
        </script>
    </body>
</html>
<?php } ?>