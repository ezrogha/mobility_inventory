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
            
        </style>
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
              <li class="active">Distributions</li>
            </ol> 
		 </div>
        <div id="page-inner" style="padding-top: 0px;">
            <div class="row">
            
                <div class="row">
                    <div class="col-md-6"></div>
                <div class="col-md-6">
                <div class="panel" style="background-color: transparent; padding-top: 0px; padding-bottom: 0px; margin-top: 0px; margin-bottom: 0px; ">
                <div class="panel-body" style="background-color: transparent; padding-top: 0px; padding-bottom: 0px; margin-top: 0px; margin-bottom: 0px; ">
               <div class="form-group">
                <div class="input-group">
                 <span class="input-group-addon">Search</span>
                 <input type="text" name="search_text" id="search_text" placeholder="Search by District" class="form-control" />
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
               
                
               <div id="result"></div>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"></div>
            </div>
            
        </div>
            
        </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.metisMenu.js"></script>
        <script src="js/custom-scripts.js"></script>
        <script>
            $(document).ready(function(){

             var inputs = document.getElementsByTagName("input");
             id = inputs[0].id;

             load_data();

             function load_data(query)
             {
              $.ajax({
               url:"includes/fetch_districts2.php?distrib_id="+id,
               method:"POST",
               data:{query:query},
               success:function(data)
               {
                $('#result').html(data);
               }
              });
             }

             $('#search_text').keyup(function(){
              var search = $(this).val();
              if(search != '')
              {
               load_data(search);
              }
              else
              {
               load_data();
              }
             });
            });
        </script>
        <script>
            $(document).ready(function(){
               $('.distribution').addClass('active-menu')
            });
        </script>
    </body>
</html>
