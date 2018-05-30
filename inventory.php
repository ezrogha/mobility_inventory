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
        if(isset($_POST['Cane'])){
            $canes_sql = "SELECT * FROM cane ORDER BY id DESC LIMIT 1";
            $canes_result = mysqli_query($connect, $canes_sql) or
                die(mysqli_error($connect));
            $canes_row = mysqli_fetch_array($canes_result);
            $given = $canes_row['given'];
            $available = $canes_row['available'];
            $cane_added = $_POST['Cane'];
            $cane_input = $cane_added + $available;
            $date = date("d/m/Y", time());
            $canes_numm = $cane_input;
            mysqli_query($connect, "INSERT INTO cane(date, added, available, given) VALUES ('$date', $cane_added, $cane_input, $given)");
            mysqli_query($connect, "INSERT INTO cane(available, given) VALUES ($cane_input, $given)");
        } 
           $canes_sql = "SELECT * FROM cane ORDER BY id DESC LIMIT 1";
           $canes_result = mysqli_query($connect, $canes_sql);
           $canes_row = mysqli_fetch_array($canes_result);
           $canes_num = $canes_row['available'];
           $canes_giv = $canes_row['given'];
        

        if(isset($_POST['white_cane'])){
            $wcanes_sql = "SELECT * FROM white_cane ORDER BY id DESC LIMIT 1";
            $wcanes_result = mysqli_query($connect, $wcanes_sql) or
                die(mysqli_error($connect));
            $wcanes_row = mysqli_fetch_array($wcanes_result);
            $given = $wcanes_row['given'];
            $available = $wcanes_row['available'];
            $wcane_added = $_POST['white_cane'];
            $wcane_input = $wcane_added + $available;
            $date = date("d/m/Y", time());
            $wcanes_numm = $wcane_input;
            mysqli_query($connect, "INSERT INTO white_cane(date, added, available, given) VALUES ('$date', $wcane_added, $wcane_input, $given)");
            mysqli_query($connect, "INSERT INTO white_cane(available, given) VALUES ($wcane_input, $given)");
        } 
           $wcanes_sql = "SELECT * FROM white_cane ORDER BY id DESC LIMIT 1";
           $wcanes_result = mysqli_query($connect, $wcanes_sql);
           $wcanes_row = mysqli_fetch_array($wcanes_result);
           $wcanes_num = $wcanes_row['available'];
           $wcanes_giv = $wcanes_row['given'];
        

        if(isset($_POST['walker'])){
            $walker_sql = "SELECT * FROM walkers ORDER BY id DESC LIMIT 1";
            $walker_result = mysqli_query($connect, $walker_sql) or
                die(mysqli_error($connect));
            $walker_row = mysqli_fetch_array($walker_result);
            $given = $walker_row['given'];
            $available = $walker_row['available'];
            $walker_added = $_POST['walker'];
            $walker_input = $walker_added + $available;
            $date = date("d/m/Y", time());
            $walker_numm = $walker_input;
            mysqli_query($connect, "INSERT INTO walkers(date, added, available, given) VALUES ('$date', $walker_added, $walker_input, $given)");
            mysqli_query($connect, "INSERT INTO walkers(available, given) VALUES ($walker_input, $given)");
        } 
           $walker_sql = "SELECT * FROM walkers ORDER BY id DESC LIMIT 1";
           $walker_result = mysqli_query($connect, $walker_sql);
           $walker_row = mysqli_fetch_array($walker_result);
           $walker_num = $walker_row['available'];
           $walker_giv = $walker_row['given'];
        
        if(isset($_POST['crutches'])){
            $crutch_sql = "SELECT * FROM crutches ORDER BY id DESC LIMIT 1";
            $crutch_result = mysqli_query($connect, $crutch_sql) or
                die(mysqli_error($connect));
            $crutch_row = mysqli_fetch_array($crutch_result);
            $given = $crutch_row['given'];
            $available = $crutch_row['available'];
            $crutch_added = $_POST['crutches'];
            $crutch_input = $crutch_added + $available;
            $date = date("d/m/Y", time());
            $crutch_numm = $crutch_input;
            mysqli_query($connect, "INSERT INTO crutches(date, added, available, given) VALUES ('$date', $crutch_added, $crutch_input, $given)");
            mysqli_query($connect, "INSERT INTO crutches(available, given) VALUES ($crutch_input, $given)");
        } 
           $crutch_sql = "SELECT * FROM crutches ORDER BY id DESC LIMIT 1";
           $crutch_result = mysqli_query($connect, $crutch_sql);
           $crutch_row = mysqli_fetch_array($crutch_result);
           $crutch_num = $crutch_row['available'];
           $crutch_giv = $crutch_row['given'];
        
        if(isset($_POST['jaf'])){
            $jaf_sql = "SELECT * FROM jaf ORDER BY id DESC LIMIT 1";
            $jaf_result = mysqli_query($connect, $jaf_sql) or
                die(mysqli_error($connect));
            $jaf_row = mysqli_fetch_array($jaf_result);
            $given = $jaf_row['given'];
            $available = $jaf_row['available'];
            $jaf_added = $_POST['jaf'];
            $jaf_input = $jaf_added + $available;
            $date = date("d/m/Y", time());
            $jaf_numm = $jaf_input;
            mysqli_query($connect, "INSERT INTO jaf(date, added, available, given) VALUES ('$date', $jaf_added, $jaf_input, $given)");
            mysqli_query($connect, "INSERT INTO jaf(available, given) VALUES ($jaf_input, $given)");
        } 
           $jaf_sql = "SELECT * FROM jaf ORDER BY id DESC LIMIT 1";
           $jaf_result = mysqli_query($connect, $jaf_sql);
           $jaf_row = mysqli_fetch_array($jaf_result);
           $jaf_num = $jaf_row['available'];
           $jaf_giv = $jaf_row['given'];
        
        if(isset($_POST['hb11'])){
            $hb11_sql = "SELECT * FROM hb_11 ORDER BY id DESC LIMIT 1";
            $hb11_result = mysqli_query($connect, $hb11_sql) or
                die(mysqli_error($connect));
            $hb11_row = mysqli_fetch_array($hb11_result);
            $given = $hb11_row['given'];
            $available = $hb11_row['available'];
            $hb11_added = $_POST['hb11'];
            $hb11_input = $hb11_added + $available;
            $date = date("d/m/Y", time());
            $hb11_numm = $hb11_input;
            mysqli_query($connect, "INSERT INTO hb_11(date, added, available, given) VALUES ('$date', $hb11_added, $hb11_input, $given)");
            mysqli_query($connect, "INSERT INTO hb_11(available, given) VALUES ($hb11_input, $given)");
        } 
           $hb11_sql = "SELECT * FROM hb_11 ORDER BY id DESC LIMIT 1";
           $hb11_result = mysqli_query($connect, $hb11_sql);
           $hb11_row = mysqli_fetch_array($hb11_result);
           $hb11_num = $hb11_row['available'];
           $hb11_giv = $hb11_row['given'];
        
        if(isset($_POST['hb13'])){
            $hb13_sql = "SELECT * FROM hb_13 ORDER BY id DESC LIMIT 1";
            $hb13_result = mysqli_query($connect, $hb13_sql) or
                die(mysqli_error($connect));
            $hb13_row = mysqli_fetch_array($hb13_result);
            $given = $hb13_row['given'];
            $available = $hb13_row['available'];
            $hb13_added = $_POST['hb13'];
            $hb13_input = $hb13_added + $available;
            $date = date("d/m/Y", time());
            $hb13_numm = $hb13_input;
            mysqli_query($connect, "INSERT INTO hb_13(date, added, available, given) VALUES ('$date', $hb13_added, $hb13_input, $given)");
            mysqli_query($connect, "INSERT INTO hb_13(available, given) VALUES ($hb13_input, $given)");
        }
           $hb13_sql = "SELECT * FROM hb_13 ORDER BY id DESC LIMIT 1";
           $hb13_result = mysqli_query($connect, $hb13_sql);
           $hb13_row = mysqli_fetch_array($hb13_result);
           $hb13_num = $hb13_row['available'];
           $hb13_giv = $hb13_row['given'];
     
        if(isset($_POST['gen1'])){
            $gen1_sql = "SELECT * FROM gen1 ORDER BY id DESC LIMIT 1";
            $gen1_result = mysqli_query($connect, $gen1_sql) or
                die(mysqli_error($connect));
            $gen1_row = mysqli_fetch_array($gen1_result);
            $given = $gen1_row['given'];
            $available = $gen1_row['available'];
            $gen1_added = $_POST['gen1'];
            $gen1_input = $gen1_added + $available;
            $date = date("d/m/Y", time());
            $gen1_numm = $gen1_input;
            mysqli_query($connect, "INSERT INTO gen1(date, added, available, given) VALUES ('$date', $gen1_added, $gen1_input, $given)");
            mysqli_query($connect, "INSERT INTO gen1(available, given) VALUES ($gen1_input, $given)");
        } 
           $gen1_sql = "SELECT * FROM gen1 ORDER BY id DESC LIMIT 1";
           $gen1_result = mysqli_query($connect, $gen1_sql);
           $gen1_row = mysqli_fetch_array($gen1_result);
           $gen1_num = $gen1_row['available'];
           $gen1_giv = $gen1_row['given'];
        
        if(isset($_POST['gen2_s_13'])){
            $gen2_s_13_sql = "SELECT * FROM gen2_s_13 ORDER BY id DESC LIMIT 1";
            $gen2_s_13_result = mysqli_query($connect, $gen2_s_13_sql) or
                die(mysqli_error($connect));
            $gen2_s_13_row = mysqli_fetch_array($gen2_s_13_result);
            $given = $gen2_s_13_row['given'];
            $available = $gen2_s_13_row['available'];
            $gen2_s_13_added = $_POST['gen2_s_13'];
            $gen2_s_13_input = $gen2_s_13_added + $available;
            $date = date("d/m/Y", time());
            $gen2_s_13_numm = $gen2_s_13_input;
            mysqli_query($connect, "INSERT INTO gen2_s_13(date, added, available, given) VALUES ('$date', $gen2_s_13_added, $gen2_s_13_input, $given)");
            mysqli_query($connect, "INSERT INTO gen2_s_13(available, given) VALUES ($gen2_s_13_input, $given)");
        } 
           $gen2_s_13_sql = "SELECT * FROM gen2_s_13 ORDER BY id DESC LIMIT 1";
           $gen2_s_13_result = mysqli_query($connect, $gen2_s_13_sql);
           $gen2_s_13_row = mysqli_fetch_array($gen2_s_13_result);
           $gen2_s_13_num = $gen2_s_13_row['available'];
           $gen2_s_13_giv = $gen2_s_13_row['given'];
        
        if(isset($_POST['gen2_m_17'])){
            $gen2_m_17_sql = "SELECT * FROM gen2_m_17 ORDER BY id DESC LIMIT 1";
            $gen2_m_17_result = mysqli_query($connect, $gen2_m_17_sql) or
                die(mysqli_error($connect));
            $gen2_m_17_row = mysqli_fetch_array($gen2_m_17_result);
            $given = $gen2_m_17_row['given'];
            $available = $gen2_m_17_row['available'];
            $gen2_m_17_added = $_POST['gen2_m_17'];
            $gen2_m_17_input = $gen2_m_17_added + $available;
            $date = date("d/m/Y", time());
            $gen2_m_17_numm = $gen2_m_17_input;
            mysqli_query($connect, "INSERT INTO gen2_m_17(date, added, available, given) VALUES ('$date', $gen2_m_17_added, $gen2_m_17_input, $given)");
            mysqli_query($connect, "INSERT INTO gen2_m_17(available, given) VALUES ($gen2_m_17_input, $given)");
        } 
           $gen2_m_17_sql = "SELECT * FROM gen2_m_17 ORDER BY id DESC LIMIT 1";
           $gen2_m_17_result = mysqli_query($connect, $gen2_m_17_sql);
           $gen2_m_17_row = mysqli_fetch_array($gen2_m_17_result);
           $gen2_m_17_num = $gen2_m_17_row['available'];
           $gen2_m_17_giv = $gen2_m_17_row['given'];
        
        if(isset($_POST['gen2_l_18_5'])){
            $gen2_l_18_5_sql = "SELECT * FROM gen2_l_18_5 ORDER BY id DESC LIMIT 1";
            $gen2_l_18_5_result = mysqli_query($connect, $gen2_l_18_5_sql) or
                die(mysqli_error($connect));
            $gen2_l_18_5_row = mysqli_fetch_array($gen2_l_18_5_result);
            $given = $gen2_l_18_5_row['given'];
            $available = $gen2_l_18_5_row['available'];
            $gen2_l_18_5_added = $_POST['gen2_l_18_5'];
            $gen2_l_18_5_input = $gen2_l_18_5_added + $available;
            $date = date("d/m/Y", time());
            $gen2_l_18_5_numm = $gen2_l_18_5_input;
            mysqli_query($connect, "INSERT INTO gen2_l_18_5(date, added, available, given) VALUES ('$date', $gen2_l_18_5_added, $gen2_l_18_5_input, $given)");
            mysqli_query($connect, "INSERT INTO gen2_l_18_5(available, given) VALUES ($gen2_l_18_5_input, $given)");
        } 
           $gen2_l_18_5_sql = "SELECT * FROM gen2_l_18_5 ORDER BY id DESC LIMIT 1";
           $gen2_l_18_5_result = mysqli_query($connect, $gen2_l_18_5_sql);
           $gen2_l_18_5_row = mysqli_fetch_array($gen2_l_18_5_result);
           $gen2_l_18_5_num = $gen2_l_18_5_row['available'];
           $gen2_l_18_5_giv = $gen2_l_18_5_row['given'];
        
        if(isset($_POST['gen2_xl_20'])){
            $gen2_xl_20_sql = "SELECT * FROM gen2_xl_20 ORDER BY id DESC LIMIT 1";
            $gen2_xl_20_result = mysqli_query($connect, $gen2_xl_20_sql) or
                die(mysqli_error($connect));
            $gen2_xl_20_row = mysqli_fetch_array($gen2_xl_20_result);
            $given = $gen2_xl_20_row['given'];
            $available = $gen2_xl_20_row['available'];
            $gen2_xl_20_added = $_POST['gen2_xl_20'];
            $gen2_xl_20_input = $gen2_xl_20_added + $available;
            $date = date("d/m/Y", time());
            $gen2_xl_20_numm = $gen2_xl_20_input;
            mysqli_query($connect, "INSERT INTO gen2_xl_20(date, added, available, given) VALUES ('$date', $gen2_xl_20_added, $gen2_xl_20_input, $given)");
            mysqli_query($connect, "INSERT INTO gen2_xl_20(available, given) VALUES ($gen2_xl_20_input, $given)");
        } 
           $gen2_xl_20_sql = "SELECT * FROM gen2_xl_20 ORDER BY id DESC LIMIT 1";
           $gen2_xl_20_result = mysqli_query($connect, $gen2_xl_20_sql);
           $gen2_xl_20_row = mysqli_fetch_array($gen2_xl_20_result);
           $gen2_xl_20_num = $gen2_xl_20_row['available'];
           $gen2_xl_20_giv = $gen2_xl_20_row['given'];
        
        if(isset($_POST['gen3_s_13'])){
            $gen3_s_13_sql = "SELECT * FROM gen3_s_13 ORDER BY id DESC LIMIT 1";
            $gen3_s_13_result = mysqli_query($connect, $gen3_s_13_sql) or
                die(mysqli_error($connect));
            $gen3_s_13_row = mysqli_fetch_array($gen3_s_13_result);
            $given = $gen3_s_13_row['given'];
            $available = $gen3_s_13_row['available'];
            $gen3_s_13_added = $_POST['gen3_s_13'];
            $gen3_s_13_input = $gen3_s_13_added + $available;
            $date = date("d/m/Y", time());
            $gen3_s_13_numm = $gen3_s_13_input;
            mysqli_query($connect, "INSERT INTO gen3_s_13(date, added, available, given) VALUES ('$date', $gen3_s_13_added, $gen3_s_13_input, $given)");
            mysqli_query($connect, "INSERT INTO gen3_s_13(available, given) VALUES ($gen3_s_13_input, $given)");
        } 
           $gen3_s_13_sql = "SELECT * FROM gen3_s_13 ORDER BY id DESC LIMIT 1";
           $gen3_s_13_result = mysqli_query($connect, $gen3_s_13_sql);
           $gen3_s_13_row = mysqli_fetch_array($gen3_s_13_result);
           $gen3_s_13_num = $gen3_s_13_row['available'];
           $gen3_s_13_giv = $gen3_s_13_row['given'];
        
        if(isset($_POST['gen3_m_17'])){
            $gen3_m_17_sql = "SELECT * FROM gen3_m_17 ORDER BY id DESC LIMIT 1";
            $gen3_m_17_result = mysqli_query($connect, $gen3_m_17_sql) or
                die(mysqli_error($connect));
            $gen3_m_17_row = mysqli_fetch_array($gen3_m_17_result);
            $given = $gen3_m_17_row['given'];
            $available = $gen3_m_17_row['available'];
            $gen3_m_17_added = $_POST['gen3_m_17'];
            $gen3_m_17_input = $gen3_m_17_added + $available;
            $date = date("d/m/Y", time());
            $gen3_m_17_numm = $gen3_m_17_input;
            mysqli_query($connect, "INSERT INTO gen3_m_17(date, added, available, given) VALUES ('$date', $gen3_m_17_added, $gen3_m_17_input, $given)");
            mysqli_query($connect, "INSERT INTO gen3_m_17(available, given) VALUES ($gen3_m_17_input, $given)");
        } 
           $gen3_m_17_sql = "SELECT * FROM gen3_m_17 ORDER BY id DESC LIMIT 1";
           $gen3_m_17_result = mysqli_query($connect, $gen3_m_17_sql);
           $gen3_m_17_row = mysqli_fetch_array($gen3_m_17_result);
           $gen3_m_17_num = $gen3_m_17_row['available'];
           $gen3_m_17_giv = $gen3_m_17_row['given'];
        
        if(isset($_POST['gen3_l_18_5'])){
            $gen3_l_18_5_sql = "SELECT * FROM gen3_l_18_5 ORDER BY id DESC LIMIT 1";
            $gen3_l_18_5_result = mysqli_query($connect, $gen3_l_18_5_sql) or
                die(mysqli_error($connect));
            $gen3_l_18_5_row = mysqli_fetch_array($gen3_l_18_5_result);
            $given = $gen3_l_18_5_row['given'];
            $available = $gen3_l_18_5_row['available'];
            $gen3_l_18_5_added = $_POST['gen3_l_18_5'];
            $gen3_l_18_5_input = $gen3_l_18_5_added + $available;
            $date = date("d/m/Y", time());
            $gen3_l_18_5_numm = $gen3_l_18_5_input;
            mysqli_query($connect, "INSERT INTO gen3_l_18_5(date, added, available, given) VALUES ('$date', $gen3_l_18_5_added, $gen3_l_18_5_input, $given)");
            mysqli_query($connect, "INSERT INTO gen3_l_18_5(available, given) VALUES ($gen3_l_18_5_input, $given)");
        } 
           $gen3_l_18_5_sql = "SELECT * FROM gen3_l_18_5 ORDER BY id DESC LIMIT 1";
           $gen3_l_18_5_result = mysqli_query($connect, $gen3_l_18_5_sql);
           $gen3_l_18_5_row = mysqli_fetch_array($gen3_l_18_5_result);
           $gen3_l_18_5_num = $gen3_l_18_5_row['available'];
           $gen3_l_18_5_giv = $gen3_l_18_5_row['given'];
        
        if(isset($_POST['gen3_xl_20'])){
            $gen3_xl_20_sql = "SELECT * FROM gen3_xl_20 ORDER BY id DESC LIMIT 1";
            $gen3_xl_20_result = mysqli_query($connect, $gen3_xl_20_sql) or
                die(mysqli_error($connect));
            $gen3_xl_20_row = mysqli_fetch_array($gen3_xl_20_result);
            $given = $gen3_xl_20_row['given'];
            $available = $gen3_xl_20_row['available'];
            $gen3_xl_20_added = $_POST['gen3_xl_20'];
            $gen3_xl_20_input = $gen3_xl_20_added + $available;
            $date = date("d/m/Y", time());
            $gen3_xl_20_numm = $gen3_xl_20_input;
            mysqli_query($connect, "INSERT INTO gen3_xl_20(date, added, available, given) VALUES ('$date', $gen3_xl_20_added, $gen3_xl_20_input, $given)");
            mysqli_query($connect, "INSERT INTO gen3_xl_20(available, given) VALUES ($gen3_xl_20_input, $given)");
        } 
           $gen3_xl_20_sql = "SELECT * FROM gen3_xl_20 ORDER BY id DESC LIMIT 1";
           $gen3_xl_20_result = mysqli_query($connect, $gen3_xl_20_sql);
           $gen3_xl_20_row = mysqli_fetch_array($gen3_xl_20_result);
           $gen3_xl_20_num = $gen3_xl_20_row['available'];
           $gen3_xl_20_giv = $gen3_xl_20_row['given'];
        
    
    
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
    </head> 
    <body>
        <div id="wrapper">
            <?php include "includes/header.php"; ?>
        <div id="page-wrapper">
		  <div class="header"> 
            <h1 class="page-header">
                Inventory
            </h1>	
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li class="active">Inventory</li>
            </ol> 
		 </div>
         <div id="page-inner">
             <div class="row">
                 <!--<div class="col-md-3">
                     <div class="panel panel-danger">
                         <div class="panel-heading">
                             Wheel Chairs
                         </div>
                         <div class="panel-body">
                            Available:
                             <br />
                            Given:
                             <br />
                            <a href="#"><i class="fa fa-plus"></i>Add</a>
                         </div>
                    </div>
                 </div>-->
                 <div class="col-md-3">
                     <div class="panel panel-success">
                         <div class="panel-heading">
                             Canes
                         </div>
                         <div class="panel-body">
                             
                            Available: <?php if(isset($canes_numm)){ echo $canes_numm; } else { echo $canes_num; } ?>
                             <br /><br />
                            Given: <?php echo $canes_giv; ?>
                             <br /><br />
                             <?php if($_SESSION['user']=='staff'){
    
                             } else { ?>
                             <form action="inventory.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                <input type="number" name="Cane" width="5" class="form-control"/><a class="input-group-addon"><button type="submit"><i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                            </form>
                             <?php } ?>
                         </div>
                    </div>
                 </div>
                 <div class="col-md-3">
                     <div class="panel panel-success">
                         <div class="panel-heading">
                             White canes
                         </div>
                         <div class="panel-body">
                             
                            Available: <?php if(isset($wcanes_numm)){ echo $wcanes_numm; } else { echo $wcanes_num; } ?>
                             <br /><br />
                            Given: <?php echo $wcanes_giv; ?>
                             <br /><br />
                             <?php if($_SESSION['user']=='staff'){
    
                             } else { ?>
                             <form action="inventory.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" name="white_cane" width="5" class="form-control"/><a class="input-group-addon"><button type="submit"><i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                             <?php } ?>
                             </form>
                         </div>
                    </div>
                 </div>
                 <div class="col-md-3">
                     <div class="panel panel-success">
                         <div class="panel-heading">
                             Walkers
                         </div>
                         <div class="panel-body">
                            Available: <?php if(isset($walker_numm)){ echo $walker_numm; } else { echo $walker_num; } ?>
                             <br /><br />
                            Given: <?php echo $walker_giv; ?>
                             <br /><br />
                             <?php if($_SESSION['user']=='staff'){
    
                             } else { ?>
                             <form action="inventory.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                <input type="number" name="walker" width="5" class="form-control"/><a class="input-group-addon"><button type="submit"><i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                             <?php } ?>
                             </form>
                         </div>
                    </div>
                 </div>
                 <div class="col-md-3">
                     <div class="panel panel-success">
                         <div class="panel-heading">
                             Crutches
                         </div>
                         <div class="panel-body">
                             
                            Available: <?php if(isset($crutch_numm)){ echo $crutch_numm; } else { echo $crutch_num; } ?>
                             <br /><br />
                            Given: <?php echo $crutch_giv; ?>
                             <br /><br />
                             <?php if($_SESSION['user']=='staff'){
    
                             } else { ?>
                            <form action="inventory.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                <input type="number" name="crutches" width="5" class="form-control"/><a class="input-group-addon"><button type="submit"><i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                             <?php } ?>
                             </form>
                         </div>
                    </div>
                 </div>
                 <div class="col-md-3">
                     <div class="panel panel-success">
                         <div class="panel-heading">
                             GEN1
                         </div>
                         <div class="panel-body">
                            Available: <?php if(isset($gen1_numm)){ echo $gen1_numm; } else { echo $gen1_num; } ?>
                             <br /><br />
                            Given: <?php echo $gen1_giv; ?>
                             <br /><br />
                             <?php if($_SESSION['user']=='staff'){
    
                             } else { ?>
                             <form action="inventory.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                <input type="number" name="gen1" width="5" class="form-control"/><a class="input-group-addon"><button type="submit"><i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                             <?php } ?>
                             </form>
                         </div>
                    </div>
                 </div>
                 <div class="col-md-3">
                     <div class="panel panel-success">
                         <div class="panel-heading">
                             GEN2: S/13
                         </div>
                         <div class="panel-body">
                            Available: <?php if(isset($gen2_s_13_numm)){ echo $gen2_s_13_numm; } else { echo $gen2_s_13_num; } ?>
                             <br /><br />
                            Given: <?php echo $gen2_s_13_giv; ?>
                             <br /><br />
                             <?php if($_SESSION['user']=='staff'){
    
                             } else { ?>
                            <form action="inventory.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                <input type="number" name="gen2_s_13" width="5" class="form-control"/><a class="input-group-addon"><button type="submit"><i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                             <?php } ?>
                             </form>
                         </div>
                    </div>
                 </div>
                 <div class="col-md-3">
                     <div class="panel panel-success">
                         <div class="panel-heading">
                             GEN2: M/17
                         </div>
                         <div class="panel-body">
                            Available: <?php if(isset($gen2_m_17_numm)){ echo $gen2_m_17_numm; } else { echo $gen2_m_17_num; } ?>
                             <br /><br />
                            Given: <?php echo $gen2_m_17_giv; ?>
                             <br /><br />
                             <?php if($_SESSION['user']=='staff'){
    
                             } else { ?>
                            <form action="inventory.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                <input type="number" name="gen2_m_17" width="5" class="form-control"/><a class="input-group-addon"><button type="submit"><i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                             <?php } ?>
                             </form>
                         </div>
                    </div>
                 </div>
                 <div class="col-md-3">
                     <div class="panel panel-success">
                         <div class="panel-heading">
                             GEN2: L/18.5
                         </div>
                         <div class="panel-body">
                            Available: <?php if(isset($gen2_l_18_5_numm)){ echo $gen2_l_18_5_numm; } else { echo $gen2_l_18_5_num; } ?>
                             <br /><br />
                            Given: <?php echo $gen2_l_18_5_giv; ?>
                             <br /><br />
                             <?php if($_SESSION['user']=='staff'){
    
                             } else { ?>
                            <form action="inventory.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                <input type="number" name="gen2_l_18_5" width="5" class="form-control"/><a class="input-group-addon"><button type="submit"><i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                             <?php } ?>
                             </form>
                         </div>
                    </div>
                 </div>
                 <div class="col-md-3">
                     <div class="panel panel-success">
                         <div class="panel-heading">
                             GEN2: XL/20
                         </div>
                         <div class="panel-body">
                            Available: <?php if(isset($gen2_xl_20_numm)){ echo $gen2_xl_20_numm; } else { echo $gen2_xl_20_num; } ?>
                             <br /><br />
                            Given: <?php echo $gen2_xl_20_giv; ?>
                             <br /><br />
                             <?php if($_SESSION['user']=='staff'){
    
                             } else { ?>
                            <form action="inventory.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                <input type="number" name="gen2_xl_20" width="5" class="form-control"/><a class="input-group-addon"><button type="submit"><i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                             <?php } ?>
                             </form>
                         </div>
                    </div>
                 </div>
                 <div class="col-md-3">
                     <div class="panel panel-success">
                         <div class="panel-heading">
                             GEN3: S/13
                         </div>
                         <div class="panel-body">
                            Available: <?php if(isset($gen3_s_13_numm)){ echo $gen3_s_13_numm; } else { echo $gen3_s_13_num; } ?>
                             <br /><br />
                            Given: <?php echo $gen3_s_13_giv; ?>
                             <br /><br />
                             <?php if($_SESSION['user']=='staff'){
    
                             } else { ?>
                            <form action="inventory.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                <input type="number" name="gen3_s_13" width="5" class="form-control"/><a class="input-group-addon"><button type="submit"><i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                             <?php } ?>
                             </form>
                         </div>
                    </div>
                 </div>
                 <div class="col-md-3">
                     <div class="panel panel-success">
                         <div class="panel-heading">
                             GEN3: M/17
                         </div>
                         <div class="panel-body">
                            Available: <?php if(isset($gen3_m_17_numm)){ echo $gen3_m_17_numm; } else { echo $gen3_m_17_num; } ?>
                             <br /><br />
                            Given: <?php echo $gen3_m_17_giv; ?>
                             <br /><br />
                             <?php if($_SESSION['user']=='staff'){
    
                             } else { ?>
                            <form action="inventory.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                <input type="number" name="gen3_m_17" width="5" class="form-control"/><a class="input-group-addon"><button type="submit"><i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                             <?php } ?>
                             </form>
                         </div>
                    </div>
                 </div>
                 <div class="col-md-3">
                     <div class="panel panel-success">
                         <div class="panel-heading">
                             GEN3: L/18.5
                         </div>
                         <div class="panel-body">
                            Available: <?php if(isset($gen3_l_18_5_numm)){ echo $gen3_l_18_5_numm; } else { echo $gen3_l_18_5_num; } ?>
                             <br /><br />
                            Given: <?php echo $gen3_l_18_5_giv; ?>
                             <br /><br />
                             <?php if($_SESSION['user']=='staff'){
    
                             } else { ?>
                            <form action="inventory.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                <input type="number" name="gen3_l_18_5" width="5" class="form-control"/><a class="input-group-addon"><button type="submit"><i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                             <?php } ?>
                             </form>
                         </div>
                    </div>
                 </div>
                 <div class="col-md-3">
                     <div class="panel panel-success">
                         <div class="panel-heading">
                             GEN3: XL/20
                         </div>
                         <div class="panel-body">
                            Available: <?php if(isset($gen3_xl_20_numm)){ echo $gen3_xl_20_numm; } else { echo $gen3_xl_20_num; } ?>
                             <br /><br />
                            Given: <?php echo $gen3_xl_20_giv; ?>
                             <br /><br />
                             <?php if($_SESSION['user']=='staff'){
    
                             } else { ?>
                            <form action="inventory.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                <input type="number" name="gen3_xl_20" width="5" class="form-control"/><a class="input-group-addon"><button type="submit"><i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                             <?php } ?>
                             </form>
                         </div>
                    </div>
                 </div>
                 
                 <div class="col-md-3">
                     <div class="panel panel-success">
                         <div class="panel-heading">
                             JAF
                         </div>
                         <div class="panel-body">
                            Available: <?php if(isset($jaf_numm)){ echo $jaf_numm; } else { echo $jaf_num; } ?>
                             <br /><br />
                            Given: <?php echo $jaf_giv; ?>
                             <br /><br />
                             <?php if($_SESSION['user']=='staff'){
    
                             } else { ?>
                            <form action="inventory.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                <input type="number" name="jaf" width="5" class="form-control"/><a class="input-group-addon"><button type="submit"><i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                             <?php } ?>
                             </form>
                         </div>
                    </div>
                 </div>
                 <div class="col-md-3">
                     <div class="panel panel-success">
                         <div class="panel-heading">
                             HB 11
                         </div>
                         <div class="panel-body">
                            Available: <?php if(isset($hb11_numm)){ echo $hb11_numm; } else { echo $hb11_num; } ?>
                             <br /><br />
                            Given: <?php echo $hb11_giv; ?>
                             <br /><br />
                             <?php if($_SESSION['user']=='staff'){
    
                             } else { ?>
                            <form action="inventory.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                <input type="number" name="hb11" width="5" class="form-control"/><a class="input-group-addon"><button type="submit"><i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                             <?php } ?>
                             </form>
                         </div>
                    </div>
                 </div>
                 <div class="col-md-3">
                     <div class="panel panel-success">
                         <div class="panel-heading">
                             HB 13
                         </div>
                         <div class="panel-body">
                            Available: <?php if(isset($hb13_numm)){ echo $hb13_numm; } else { echo $hb13_num; } ?>
                             <br /><br />
                            Given: <?php echo $hb13_giv; ?>
                             <br /><br />
                             <?php if($_SESSION['user']=='staff'){
    
                             } else { ?>
                            <form action="inventory.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                <input type="number" name="hb13" width="5" class="form-control"/><a class="input-group-addon"><button type="submit"><i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                             <?php } ?>
                             </form>
                         </div>
                    </div>
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
               $('.inventory').addClass('active-menu');
            });
        </script>
    </body>
</html>
<?php
    }
?>