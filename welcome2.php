<?php
    require_once "includes/connect.php";
    require_once "includes/functions.php";
    
    session_start();

    if(isset($_SESSION['user'])){
        
    } else {
        redirect_to("home.php");
    }

    $result = mysqli_query($connect, "SELECT * FROM all_districts");
    confirm_query($result);
        
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
            .badge {
                background-color: #fff;
                padding: 0px;
                color: #777;
                font-size: 2rem;
            }
            .scroll-area {
                height: 102px;
                overflow-y: scroll;
            }
            #page-wrapper{
                position: relative;
            }
            #form {
                position: fixed;
                width: 600px;
                height: 600px;
                right: 0;
                z-index: 100;
                top: 100px;
                background-color: #fff;
                box-shadow: -3px 3px 10px #888;
                border-radius: 5px;
                padding: 5px;
            }
            .formmm{
                transform: translate(605px, -37px);
                transition: transform 0.5s;
            }
            .formmmm {
                transform: translate(0px, -37px);
            }
            #uis {
                width: 100%;
                height: 100%;
                position: relative;
                overflow-y: hidden;
            }
            
            #list {
                position: fixed;
                width: 600px;
                height: 600px;
                right: 0;
                z-index: 200;
                top: 100px;
                background-color: #fff;
                box-shadow: -3px 3px 10px #888;
                border-radius: 5px;
                padding: 5px;
            }
            .listtt{
                transform: translate(605px, 0px);
                transition: transform 0.5s;
            }
            .listttt {
                transform: translate(0px, 0px);
            }
            
            #jka {
                width: 100%;
                height: 100%;
                position: relative;
                overflow-y: hidden;
            }
            
            .xclose {
                z-index: 300;
                position: absolute;
                right: 18px;
                top: 12px;
            }
            .xclose:hover {
                color: #d03728;
            }
            .yclose {
                z-index: 300;
                position: absolute;
                right: 18px;
                top: 12px;
            }
            .yclose:hover {
                color: #d03728;
            }
            .visible{
                opacity: 0;
            }
            a {
                color: #555;
            }
            a:hover {
                color: #daa81d;
            }
            a:active {
                color: #daa81d;
            }
        </style>
        <script src="js/jquery-1.10.2.js"></script>
        <script>
            function showUser(str) {
                if (str == "") {
                    document.getElementById("uis").innerHTML = "";
                    return;
                } else { 
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("uis").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET","includes/fetch_form.php?q="+str,true);
                    xmlhttp.send();
                }
            }
            
            function showUserr(str) {
                if (str == "") {
                    document.getElementById("jka").innerHTML = "";
                    return;
                } else { 
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("jka").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET","includes/fetch_list.php?q="+str,true);
                    xmlhttp.send();
                }
            }
        </script>
    </head> 
    <body>
        <div id="wrapper">
            <?php include "includes/header.php"; ?>
        <div id="page-wrapper">
		  <div class="header"> 
            <h1 class="page-header">
                Distributions
            </h1>
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li class="active">Distribution</li>
            </ol> 
		 </div>
        <div id="page-inner">
            <div class="row">
            <div class="panel panel-group" id="accordion-alt3">              
                <?php
                while($row = mysqli_fetch_array($result)){
                    $district = $row['district'];
                    $distrib_result = mysqli_query($connect, "SELECT * FROM distribution WHERE district = '$district'");
                    $distrib_num = mysqli_num_rows($distrib_result);
                ?>
                    <div class="panel col-md-12">	
                        <!-- Panel heading -->
                        <a data-toggle="collapse" data-parent="#accordion-alt3" href="#<?php echo $district;?>">
                         <div class="panel-heading">
                            <h4 class="panel-title">
                              
                                <i class="fa fa-angle-right"></i> <?php echo $district; ?>
                              
                            </h4>
                         </div>
                        </a>
                         <div id="<?php echo $district;?>" class="panel-collapse collapse">
                            <!-- Panel body -->
                            <div class="panel-body">
                              <?php echo $district;?> district has <?php echo $distrib_num;?> distributions. 
                            </div>
                         </div>
                      </div>
                <?php }
                ?>
            </div>
            </div>
            
        </div>
            
        <div id="fixd">
        <div id="form" class="formmm">
            <button type="button" class="close xclose text-right" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div id="uis">
            
            </div>
        </div>
        <!--Form-->
            
        <div id="list" class="listtt" style="overflow: scroll">
            <button type="button" class="close yclose text-right" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div id="jka">
            
            </div>
        </div>
        </div>
        <!--List-->
            
        </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.metisMenu.js"></script>
        <script src="js/custom-scripts.js"></script>
        <script>
            $(document).ready(function(){
               $('.distribution').addClass('active-menu')
            });
        </script>
    </body>
</html>
<script>
    $(document).ready(function(){
       $('.sld').click(function(){
           $('#form').toggleClass('formmmm');
       });
        $('.yui').click(function(){
           $('#list').toggleClass('listttt');
       });
        $('.yclose').click(function(){
           $('#list').toggleClass('listttt');
       });
        $('.yui').click(function(){
           $('#form').toggleClass('visible');
       });
        $('.yclose').click(function(){
           $('#form').toggleClass('visible');
       });
        $('.xclose').click(function(){
           $('#form').toggleClass('formmmm');
       });
    });
</script>