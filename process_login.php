<?php 
    require_once "includes/connect.php";
    require_once "includes/functions.php";
    session_start();
   
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['admin'])){
            $username = mysqli_real_escape_string($connect, $_POST['username']);
            $password=  mysqli_real_escape_string($connect, $_POST['password']);
            $hashed_password = sha1($password);
            
            $usql = "SELECT * FROM employee WHERE username = '{$username}' LIMIT 1";
            $uresult = mysqli_query($connect, $usql);
            if(mysqli_num_rows($uresult) == 1){
               $psql = "SELECT * FROM employee WHERE password = '{$hashed_password}' LIMIT 1";
               $presult = mysqli_query($connect, $psql);
                if(mysqli_num_rows($presult) == 1){
                    $_SESSION['user'] = "partner";
                    $_SESSION['name'] = "Admin";
                    redirect_to("index.php");
                } else {
                    $_SESSION['error'] = "Password is incorrect";
                    redirect_to("admin_login.php");
                }
            } else {
                $_SESSION['error'] = "Username is incorrect";
                redirect_to("admin_login.php");
            }
            
        } else if(isset($_POST['volunteer'])){
            $username = mysqli_real_escape_string($connect, $_POST['username']);
            $password=  mysqli_real_escape_string($connect, $_POST['password']);
            $hashed_password = sha1($password);
            
            $usql = "SELECT * FROM volunteer WHERE username = '{$username}' LIMIT 1";
            $uresult = mysqli_query($connect, $usql);
            if(mysqli_num_rows($uresult) == 1){
               $psql = "SELECT * FROM volunteer WHERE password = '{$hashed_password}' LIMIT 1";
               $presult = mysqli_query($connect, $psql);
                if(mysqli_num_rows($presult) == 1){
                    $_SESSION['user'] = "volunteer";
                    $vol_row = mysqli_fetch_array($presult);
                    $_SESSION['name'] = $vol_row['firstname'] . " " .$vol_row['lastname'];
                    redirect_to("welcome.php");
                } else {
                    $_SESSION['error'] = "Password is incorrect";
                    redirect_to("home.php");
                }
            } else {
                $_SESSION['error'] = "username is incorrect";
                redirect_to("home.php");
            }
        } else if(isset($_POST['staff'])){
            $username = mysqli_real_escape_string($connect, $_POST['username']);
            $password=  mysqli_real_escape_string($connect, $_POST['password']);
            $hashed_password = sha1($password);
            
            $vsql = "SELECT * FROM staff WHERE username = '{$username}' LIMIT 1";
            $vresult = mysqli_query($connect, $vsql);
            if(mysqli_num_rows($vresult) == 1){
               $ssql = "SELECT * FROM staff WHERE password = '{$hashed_password}' LIMIT 1";
               $sresult = mysqli_query($connect, $ssql);
                if(mysqli_num_rows($sresult) == 1){
                    $_SESSION['user'] = "staff";
                    $stf_row = mysqli_fetch_array($sresult);
                    $_SESSION['name'] = $stf_row['firstname'] . " " .$stf_row['lastname'];
                    redirect_to("index.php");
                } else {
                    $_SESSION['error'] = "Password is incorrect";
                    redirect_to("home.php");
                }
            } else {
                redirect_to("home.php");
            }
        }
    } else {
        redirect_to("home.php");
    }
?>