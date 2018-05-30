<?php
    require_once "includes/connect.php";
    require_once "includes/functions.php";
    
    session_start();

    if(isset($_SESSION['user'])){
        
    } else {
        redirect_to("home.php");
    }
    
    if($_SESSION['user'] == 'partner') {
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['submit'])){
            $firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
            $lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
            $username = mysqli_real_escape_string($connect, $_POST['username']);
            $phone = mysqli_real_escape_string($connect, $_POST['phone']);
            $password = mysqli_real_escape_string($connect, sha1($_POST['password']));
            
            $sql = "SELECT username FROM volunteer WHERE username = '{$username}'";
            $result = mysqli_query($connect, $sql);
            if(!$result){
                die("Database Query error: " . mysqli_error($connect));
            }
            if(mysqli_affected_rows($connect) > 0){
                $msg = "<p class=\"red\">Voluteer with this username already exists in the system</p>";
            } else {
                $sql = "INSERT INTO volunteer(firstname, lastname, username, phone, password)";
                $sql .= "VALUES('{$firstname}', '{$lastname}', '{$username}', '{$phone}', '{$password}')";
                if(mysqli_query($connect, $sql)){
                    $msg = "<p class=\"blue\">Volunteer Successfully added</p>";
                } else {
                    $msg = "Error: " . mysqli_error();
                }
            }
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
        <style>
            #tbl{
                overflow-y: scroll;
                max-height: 520px;
            }
        </style>
    </head> 
    <body>
        <div id="wrapper">
            <?php include "includes/header.php"; ?>
        <div id="page-wrapper">
		  <div class="header"> 
            <h1 class="page-header">
                Volunteer
            </h1>
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li class="active">Add Volunteer</li>
            </ol> 
		 </div>
         <div id="page-inner">
             <div class="row">
                 <div class="col-md-5">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                        Add Volunteer
                     </div>
                     <div class="panel-body">
                    <form action=<?php echo htmlentities($_SERVER['PHP_SELF']); ?> method="post" role="form">
                        <div class="form-group">
                            <label for="firstname">First Name:</label>
                            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="" required />
                        </div>
                        
                        <div class="form-group">
                            <label for="lastname">Last Name:</label>
                            <input type="text" name="lastname" id="lastname" placeholder="" class="form-control" required />
                        </div>
                        
                        <div class="form-group">
                            <label for="username">username</label>
                            <input type="username" name="username" id="username" placeholder="" class="form-control" required />
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" placeholder="" class="form-control" required />
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="" class="form-control" required />
                        </div>
                        <input type="submit" name="submit" value="Sign Up" class="btn btn-primary" />
                    </form>
                <br />
                    </div>
                </div>
                </div>
                 <div class="col-md-7">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                        Volunteers
                     </div>
                     <div class="panel-body" id="tbl">
                        <?php
                            $vol_sql = "SELECT * FROM volunteer";
                            $vol_result = mysqli_query($connect, $vol_sql);
                            echo "<table class=\"table table-striped table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>username</th>
                                    <th>Phone</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>";
                            while($row = mysqli_fetch_array($vol_result)){
                                echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['firstname']} {$row['lastname']}</td>
                                    <td>{$row['username']}</td>
                                    <td>{$row['phone']}</td>
                                    <td class=\"text-center\"><a href=\"delete_user.php?del_vol=".$row['id']."\" ><i title=\"delete volunteer\" class=\"fa fa-trash-o\"></i></a></td>
                                </tr>";
                            }
                            echo "</tbody></table>";
                         ?>
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
                $('.volunteer').addClass('active-menu');
            });
        </script>
    </body>
</html>
<?php
    } else if($_SESSION['user'] == 'staff'){
        redirect_to("index.php");
    } else {
        redirect_to("welcome.php");
    }
?>