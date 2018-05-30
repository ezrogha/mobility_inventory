<?php
    require_once "includes/connect.php";
    require_once "includes/functions.php";
    session_start();

    if(isset($_SESSION['user'])){
        
    } else {
        redirect_to("home.php");
    }

    if(isset($_GET['distrib_id'])){
        $id = $_GET['distrib_id'];
        $distrib_result = mysqli_query($connect, "SELECT * FROM distribution WHERE id = $id");
        $distrib_row = mysqli_fetch_array($distrib_result);
        $distribution = $distrib_row['distribution'];
        $distrib_id = $distrib_row['id'];
        
        $followup_result = mysqli_query($connect, "SELECT * FROM $distribution WHERE followup = 1");
        $followup_num = mysqli_num_rows($followup_result);
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
              <!--<img src="images/icon.png" class="rt pull-right" id="<?php /*echo $distrib_id;*/?>"/>-->
              <input type="text" class="rt pull-right" id="<?php echo $distrib_id;?>" hidden="hidden"/>
            <ol class="breadcrumb">
              <li><a href="index2.php?distrib_id=<?php echo $distrib_id;?>"><?php echo $distribution; ?></a></li>
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
                        Initial Mobility
                    </div>
                    <div class="panel-body">
                        <canvas id="mycurrentcanvas" class="chart"></canvas>
                    </div>
                </div>
            </div>
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
            </div>
            <div class="row">
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
            </div>
            <a href="#" class="btn btn-default print" onclick="window.print()">Print</a>
            
            </div>
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
                    end: '<?php echo $followup_num; ?>',
                    duration: 2000,
                });
            });
        </script>
        <script src="js/custom-scripts.js"></script>
        <script>
        $(document).ready(function(){
            
        $(".rt").click(function(){
            $(this).hide();
        });
        /*$(".rt").click(function(){*/
            var inputs = document.getElementsByTagName("input");
            id = inputs[0].id;
    Chart.defaults.global.legend.display = false;
    Chart.defaults.global.response = false;
    
    $.ajax({
        url: "includes/data.php?distrib_id="+id,
        method: "GET",
        success: function(data){
            console.log(data);
            var label = [];
            var y = [];
            
            for(var i in data){
                label.push(data[i].label);
                y.push(data[i].y);
            }
            
            var genderchartdata = {
                labels: label,
                datasets: [
                    {
                        label: "",
                        backgroundColor: 'rgba(30, 191, 174, 0.75)',
                        borderColor: 'rgba(30, 191, 174, 1)',
                        hoverBackgroundColor: 'rgba(30, 191, 174, 0.75)',
                        hoverBorderColor: 'rgba(30, 191, 174, 1)',
                        data: y
                    }
                ]
            };
            var ctx = $('#mycanvas');
            
            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: genderchartdata
            })
        },
        error: function(data){
            console.log(data);
        }
    });

    Chart.defaults.global.legend.display = false;
    
    $.ajax({
        url: "includes/gender_data.php?distrib_id="+id,
        method: "GET",
        success: function(data){
            console.log(data);
            var label = [];
            var y = [];
            
            for(var i in data){
                label.push(data[i].label);
                y.push(data[i].y);
            }
            
            var chartdata = {
                labels: label,
                datasets: [
                    {
                        label: "",
                        backgroundColor: 'rgba(48, 164, 255, 0.75)',
                        borderColor: 'rgba(48, 164, 255, 1)',
                        hoverBackgroundColor: 'rgba(48, 164, 255, 0.75)',
                        hoverBorderColor: 'rgba(48, 164, 255, 1)',
                        data: y
                    }
                ]
            };
            var ctx = $('#mygendercanvas');
            
            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: chartdata
            })
        },
        error: function(data){
            console.log(data);
        }
    });

    Chart.defaults.global.legend.display = false;
    
    $.ajax({
        url: "includes/cause_data.php?distrib_id="+id,
        method: "GET",
        success: function(data){
            console.log(data);
            var label = [];
            var y = [];
            
            for(var i in data){
                label.push(data[i].label);
                y.push(data[i].y);
            }
            
            var chartdata = {
                labels: label,
                datasets: [
                    {
                        label: "",
                        backgroundColor: 'rgba(246, 73, 95, 0.75)',
                        borderColor: 'rgba(246, 73, 95, 1)',
                        hoverBackgroundColor: 'rgba(246, 73, 95, 0.75)',
                        hoverBorderColor: 'rgba(246, 73, 95, 1)',
                        data: y
                    }
                ]
            };
            var ctx = $('#mycausecanvas');
            
            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: chartdata
            })
        },
        error: function(data){
            console.log(data);
        }
    });

    Chart.defaults.global.legend.display = false;
    
    $.ajax({
        url: "includes/date_data.php?distrib_id="+id,
        method: "GET",
        success: function(data){
            console.log(data);
            var label = [];
            var y = [];
            
            for(var i in data){
                label.push(data[i].label);
                y.push(data[i].y);
            }
            
            var chartdata = {
                labels: label,
                datasets: [
                    {
                        label: "",
                        backgroundColor: 'rgba(48, 164, 255, 0.2)',
                        borderColor: 'rgba(48, 164, 255, 0.75)',
                        hoverBackgroundColor: 'rgba(48, 164, 255, 0.2)',
                        hoverBorderColor: 'rgba(48, 164, 255, 0.75)',
                        data: y
                    }
                ]
            };
            var ctx = $('#mydatecanvas');
            
            var barGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata
            })
        },
        error: function(data){
            console.log(data);
        }
    });

    Chart.defaults.global.legend.display = false;
    
    $.ajax({
        url: "includes/current_data.php?distrib_id="+id,
        method: "GET",
        success: function(data){
            console.log(data);
            var label = [];
            var y = [];
            
            for(var i in data){
                label.push(data[i].label);
                y.push(data[i].y);
            }
            
            var chartdata = {
                labels: label,
                datasets: [
                    {
                        label: "",
                        backgroundColor: 'rgba(17, 122, 101, 0.75)',
                        borderColor: 'rgba(17, 122, 101, 1)',
                        hoverBackgroundColor: 'rgba(17, 122, 101, 0.75)',
                        hoverBorderColor: 'rgba(17, 122, 101, 1)',
                        data: y
                    }
                ]
            };
            var ctx = $('#mycurrentcanvas');
            
            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: chartdata
            })
        },
        error: function(data){
            console.log(data);
        }
    });
            /*});*/
});


        </script>
        <script>
            $(document).ready(function(){
               $('li a[href^="reports"]').addClass('active-menu')
            });
        </script>
    </body>
</html>
    <?php
    } else {
        redirect_to("welcome.php");
    }
    ?>