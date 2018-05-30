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
        
        $table_result = mysqli_query($connect, "SELECT * FROM $distribution WHERE followup = 1");
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
        <style>
            .fh {
                transition: 0.2s;
            }
            .fh:hover {
                transform: scale(5) translate(15px, 13px);
            }
        </style>
        <script>
            function showUser(str) {
                var inputs = document.getElementsByTagName("input");
                did = inputs[0].id;
                if (str == "") {
                    document.getElementById("myModal").innerHTML = "";
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
                            document.getElementById("myModal").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET","includes/fetch_profile.php?distrib_id="+did+"&q="+str,true);
                    xmlhttp.send();
                }
            }
        </script>
    </head> 
    <body>
        <div id="wrapper">
            <input type="text" id="<?php echo $distrib_id;?>" hidden="hidden" />
            <?php include "includes/header.php"; ?>
        <div id="page-wrapper">
		  <div class="header"> 
            <h1 class="page-header">
                Wait List
            </h1>	
            <ol class="breadcrumb">
              <li><a href="index2.php?distrib_id=<?php echo $distrib_id;?>"><?php echo $distribution; ?></a></li>
              <li class="active">Wait List</li>
            </ol> 
		 </div>
        <div id="page-inner">
            <div class="row">
            <div class="col-md-12">
                
               <div class="panel panel-default">
                <div class="panel-heading">
                   Wait List <?php echo $distribution;?>
                </div>
                   
                <div class="panel-body">
                    <div class="form-group">
                <div class="input-group">
                 <span class="input-group-addon">Search</span>
                 <input type="text" name="search_text" id="search_text" placeholder="Search the wait list by Details" class="form-control" />
                </div>
               </div>
                
               <div id="result"></div>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"></div>
               </div>
               </div>
                <footer>
                    <p></p>
                </footer>
            
            </div>
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
               $('.recipient').addClass('active-menu');
            });
        </script>
    </body>
</html>
<script>
$(document).ready(function(){

 var inputs = document.getElementsByTagName("input");
 id = inputs[0].id;
    
 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"includes/fetch_wait.php?distrib_id="+id,
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
<?php
    } else {
        redirect_to("welcome.php");
    }
?>