<?php
    require_once "includes/connect.php";
    require_once "includes/functions.php";
    session_start();

    if(isset($_SESSION['user'])){
        
    } else {
        redirect_to("home.php");
    }
    
    if($_SESSION['user'] == 'volunteer'){
        redirect_to("index.php");
    } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
        #follow {
            font-weight: 500;
            font-size: 4em;
            color: rgba(199, 0, 57, 1);
            font-size: 700;
            font-family: Arial;
        }
        @media print {
            nav {
                display: none;
            }

            .print {
                display: none;
            }

            .breadcrumb{
                display: none;
            }
            .row {
                width: 100%;
            }
            .col-sm-6 {
                float: left;
                width: 45%;
            }
            .row > .col-sm-6:nth-child(2){
                margin-left: 4%;
            }
            .panel {
                border: 1px solid #fff;
            }
            .row:nth-child(3) {
                margin-bottom: 100px;
            }
            embed {
                display: none;
                border: 1px solid #000;
            }
        }
    </style>

</head>
<body>
        <div id="wrapper">
            <?php include "includes/header.php"; ?>
        <div id="page-wrapper">
		  <div class="header"> 
            <h1 class="page-header">
                Reports
            </h1>		
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li class="active">Reports</li>
            </ol>
		 </div>
        <div id="page-inner">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
                <div class="panel panel-default chartJs">
                    <div class="panel-heading">
                        Disability
                    </div>
                    <div class="panel-body">
                        <canvas id="mycanvas" class="chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="panel panel-default chartJs">
                    <div class="panel-heading">
                        Gender
                    </div>
                    <div class="panel-body">
                        <canvas id="mygendercanvas" class="chart"></canvas>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="panel panel-default chartJs">
                    <div class="panel-heading">
                        Cause of disability
                    </div>
                    <div class="panel-body">
                        <canvas id="mycausecanvas" class="chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="panel panel-default chartJs">
                    <div class="panel-heading">
                        Initial Mobility
                    </div>
                    <div class="panel-body">
                        <canvas id="mycurrentcanvas" class="chart"></canvas>
                    </div>
                </div>
            </div>
            <!--<div class="col-sm-6 col-xs-12">
                <div class="panel panel-default chartJs">
                    <div class="panel-heading">
                        Turn ups
                    </div>
                    <div class="panel-body">
                        <canvas id="mydatecanvas" class="chart"></canvas>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="panel panel-default chartJs">
                    <div class="panel-heading">
                        Follow Up
                    </div>
                    <div class="panel-body">
                        <div id="follow"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="panel panel-default chartJs">
                    <div class="panel-heading">
                        Given Mobility:
                    </div>
                    <div class="panel-body">
                        &nbsp;
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="panel panel-default chartJs">
                    <div class="panel-heading">
                        Available Mobility:
                    </div>
                    <div class="panel-body">
                        &nbsp;
                    </div>
                </div>
            </div>
            </div>-->
            </div>
            <p>
                <a href="#" class="btn btn-default print" onclick="window.print()">Print</a>
            </p>
        </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/jquery.metisMenu.js"></script>
        <script src="js/jQuerySimpleCounter.js"></script>
        <script>
            $(document).ready(function(){
                $('#follow').jQuerySimpleCounter({
                    start: 0,
                    end: '<?php echo 500; ?>',
                    duration: 2000,
                });
            });
        </script>
        <script src="js/custom-scripts.js"></script>
        <script src="js/app.js"></script>
        <script>
            $(document).ready(function(){
               $('li a[href^="reports"]').addClass('active-menu')
            });
        </script>
    </body>
</html>
<?php
           } 
?>