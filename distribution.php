<?php
    require_once "includes/connect.php";
    require_once "includes/functions.php";

    session_start();

    if(isset($_SESSION['user'])){
        
    } else {
        redirect_to("home.php");
    }
?>
<?php
    

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['submit'])){
            $distribution = mysqli_real_escape_string($connect, $_POST['distribution']);
            $district = mysqli_real_escape_string($connect, $_POST['district']);
            
            $distrib_sql = "
            CREATE TABLE $distribution (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `fullname` varchar(100) NOT NULL,
              `phone` varchar(15) NOT NULL,
              `age` int(3) NOT NULL,
              `gender` varchar(6) NOT NULL,
              `date` varchar(20) NOT NULL,
              `back` int(11) NOT NULL,
              `thigh` int(11) NOT NULL,
              `leg` int(11) NOT NULL,
              `hips` int(11) NOT NULL,
              `disabilitystory` text NOT NULL,
              `disability` varchar(100) NOT NULL,
              `causeofdisability` varchar(100) NOT NULL,
              `currentmobility` varchar(100) NOT NULL,
              `alreadyhas` varchar(3) NOT NULL,
              `whyhas` varchar(100) NOT NULL,
              `everhad` varchar(3) NOT NULL,
              `whyhad` varchar(100) NOT NULL,
              `whywantchair` varchar(100) NOT NULL,
              `givemobility` varchar(64) NOT NULL,
              `notgiven` text NOT NULL,
              `audio` varchar(100) NOT NULL,
              `followup` varchar(3) NOT NULL,
              `sit_alone` varchar(100) NOT NULL,
              `often_movement` varchar(100) NOT NULL,
              `did_you_expect` varchar(100) NOT NULL,
              `live_with` varchar(100) NOT NULL,
              `helps_you` varchar(100) NOT NULL,
              `work_school` varchar(100) NOT NULL,
              `not_work_school` varchar(100) NOT NULL,
              `how_life_change` varchar(100) NOT NULL,
              `thanks` varchar(200) NOT NULL,
              `already_saved` varchar(100) NOT NULL,
              `got_saved` varchar(100) NOT NULL,
              `family_saved` varchar(100) NOT NULL,
              `did_pray` varchar(100) NOT NULL,
              `distrib_id` varchar(20) NOT NULL,
              `subcounty` varchar(100) NOT NULL,
              `district` varchar(100) NOT NULL,
              `beforee` varchar(100) NOT NULL,
              `afterr` varchar(100) NOT NULL,
              PRIMARY KEY (`id`)
            )
            ";
            $distrib_result = mysqli_query($connect, $distrib_sql);
            if($distrib_result){
                $msg = "Distribution " . $distribution . " successfully created";
            } else {
                die(mysqli_error($connect));
            }
            
            mysqli_query($connect, "INSERT INTO distribution(distribution, district)VALUES('$distribution', '$district')");
            
            /*$district = mysqli_real_escape_string($connect, $_POST['district']);
            
            $district_result = mysqli_query($connect, "SELECT distribution FROM all_districts WHERE district = '$district' LIMIT 1");
            
            $district_row = mysqli_fetch_array($district_result);
            $district_id = $district_row['distribution'];
            
            $distrib_result = mysqli_query($connect, "SELECT * FROM distribution WHERE district = '$district'");
            $distrib_num = mysqli_num_rows($distrib_result);
            $last_distrib_id = $distrib_num + 1;
            $distrib_id = (string)$district_id . (string)($last_distrib_id);
                
            $distrib_insert = mysqli_query($connect, "INSERT INTO distribution (distribution, district) VALUES ('$distrib_id', '$district')");
            if($distrib_insert){
                global $distrib_id;
                $msg = "Distribution " . $distrib_id . " successfully added";
            } else {
                die(mysqli_error($connect));
            }*/
            
        }
    }
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
        <link href="css/select2.min.css" rel="stylesheet" />
        <style>
            .fh {
                transition: 0.2s;
            }
            .fh:hover {
                transform: scale(5) translate(15px, 13px);
            }
        </style>
        
    </head> 
    <body>
        <div id="wrapper">
            <?php include "includes/header.php"; ?>
        <div id="page-wrapper">
		  <div class="header"> 
            <h1 class="page-header">
                Add A Distribution
            </h1>	
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><a href="welcome.php">Distributions</a></li>
              <li class="active">Add Distribution</li>
            </ol> 
		 </div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Select District to create distribution
                        </div>
                        <div class="panel-body">
            
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label>District:
            <?php
                $dists_result = mysqli_query($connect, "SELECT * FROM all_districts");
                
            ?>
            <div>
            <select class="selectbox" name="district">
                <?php 
                while($dists_row = mysqli_fetch_array($dists_result))
                {
                 echo "<option value=\"".$dists_row['district']."\" ";
                    if(isset($_GET['dist_id'])){
                    $id = $_GET['dist_id'];
                    if($dists_row['id'] == $id){
                        echo "selected";
                    }
                }
                echo ">".$dists_row['district']."</option>";
                }
                ?>
            </select>
            </div>
        </label>&nbsp;&nbsp;
            <label>Distribution: <input type="text" name="distribution" class="form-control" placeholder="e.g. 20_aug_2017" required /></label>
        <br><br>
        <input type="submit" name="submit" value="Create Distribution" />
        <!--<select name="subcounty">
            <option value="Kampala">Kampala</option>
            <option value="Kayunga">Kayunga</option>
            <option value="Wakiso">Wakiso</option>
            <option value="Masindi">Masindi</option>
            <option value="Gulu">Gulu</option>
        </select>-->
        </form>
            <?php
                if(isset($msg)){
                    echo "<p style=\"color: #00f\">".$msg."</p>";
                }               
            ?>
         </div>
         </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <table style="width: 100%;">
                        <tr>
                            <td>
                            Current Distributions
                            </td>
                            <td>
                            <div class="form-group pull-right" style="font-weight: 100; margin-top: 15px;">
                            <div class="input-group">
                             <span class="input-group-addon">Search</span>
                             <input type="text" name="search_text" id="search_text" placeholder=""/>
                            </div>
                            </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="panel-body">
                    
                    <?php
                        /*$retr_distrib = mysqli_query($connect, "SELECT * FROM distribution");
                        while($retr_row = mysqli_fetch_array($retr_distrib)){ 
                            if($retr_row['id'] == 0){
                                
                            } else { ?>
                                 <a class="btn btn-default"><?php echo $retr_row['distribution'];*/ ?><!--</a>-->
                           
                    <?php  /*}
                        }*/ ?>
                    <div id="result"></div>
            </div>
            </div>
        </div>
             
				<footer>
                    <p></p>
				</footer>
            
            </div>
        </div>
        </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.metisMenu.js"></script>
        <script src="js/custom-scripts.js"></script>
        <script src="js/select2.full.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
              $(".selectbox").select2();
            });
        </script>
        <script>
            $(document).ready(function(){

             load_data();

             function load_data(query)
             {
              $.ajax({
               url:"includes/fetch_distrib.php",
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
            $('.distribution').addClass('active-menu');
        </script>
    </body>
</html>