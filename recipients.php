<?php 
    require_once "includes/connect.php";
    require_once "includes/functions.php";
    
    session_start();
    
    if(isset($_SESSION['user'])){
        
    } else {
        redirect_to("home.php");
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $sql = "SELECT district FROM all_districts WHERE id={$id}";
        $result = mysqli_query($connect, $sql);
        $row= mysqli_fetch_array($result);
        $district = $row['district'];
        
        $distrib_result = mysqli_query($connect, "SELECT * FROM distribution WHERE district = '$district'");
        $reci_num = 0;
        while($distrib_row = mysqli_fetch_array($distrib_result)){
            global $reci_num;
            $distribution = $distrib_row['distribution'];
            $reci_result = mysqli_query($connect, "SELECT * FROM $distribution WHERE followup = 0");
            $recid_num = mysqli_num_rows($reci_result);
            $reci_num = $reci_num + $recid_num;
        }
        $distrib_num = mysqli_num_rows($distrib_result);
    } else {
        redirect_to("welcome.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <title></title>
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
            a.pull-right {
                color: #555;
            }
            a.pull-right:hover {
                text-decoration: none;
                color: #F36A5A;
                transition: ease 0.3s;
            }
        </style>
    </head> 
    <body>
        <div id="wrapper">
            <?php include "includes/header.php"; ?>
        <div id="page-wrapper">
		  <div class="header"> 
            <h1 class="page-header">
                Recipients From <?php echo $district; ?>
            </h1>		
            <ol class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                <li> <a href="welcome.php">Distributions</a></li>
                  <li class="active"><?php echo $district; ?></li>
				</ol> 
		 </div>
         <div id="page-inner">
           <div class="row">
            <div class="col-md-12">
                
               <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo $district . " has {$distrib_num} distributions and {$reci_num} recipients" ; ?>
                   
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
            <!--<h2 align="center"></h2><br />
           <br />
           <div id="result">
            </div>
          
        <h2></h2>
        
        <br /><br />
        <a href="page.php?dist_id=<?php echo urlencode($id); ?>">Add New Recipient</a>-->
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
   url:"includes/fetch.php?id=<?php echo $_GET['id'];?>",
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