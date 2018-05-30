<?php
    require_once "includes/connect.php";
    require_once "includes/functions.php";
    
    session_start();

    if(isset($_SESSION['user'])){
        
    } else {
        redirect_to("home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
      <title></title>
    
      <link href="css/bootstrap.css" rel="stylesheet" />
      <link href="css/font-awesome.css" rel="stylesheet" />
      <link href="css/custom-styles.css" rel="stylesheet" />
        <style>
            .del {
                text-align: center;
            }
            .fa-trash-o {
                font-size: 1.5rem;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <?php include "includes/header.php"; ?>
        <div id="page-wrapper">
		  <div class="header"> 
                <h1 class="page-header">
                    Recipients
                </h1>	
                <ol class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="#">Recipients</a></li>
                  <li class="active">All Recipients</li>
				</ol> 
		 </div>
        <div id="page-inner">
           <div class="row">
            <div class="col-md-12">
                
               <div class="panel panel-default">
                <div class="panel-heading">
                   Recipients from previous system
                </div>
                   
                <div class="panel-body">
               <div class="form-group">
                <div class="input-group">
                 <span class="input-group-addon">Search</span>
                 <input type="text" name="search_text" id="search_text" placeholder="Search by Recipient Details" class="form-control" />
                </div>
               </div>
                
               <div id="result"></div>
               </div>
               </div>
                <footer>
                    <p></p>
                </footer>
            
            </div>
            </div>
        </div>
            <!-- /. PAGE INNER  -->
        </div>
        </div>
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.metisMenu.js"></script>
        <script src="js/custom-scripts.js"></script>

        
    </body>
</html>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"includes/fetch_alll.php",
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
       $('.recipient').addClass('active-menu')
    });
</script>