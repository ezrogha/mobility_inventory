<?php
    require_once "includes/connect.php";
    require_once "includes/functions.php";
    session_start();

    if(isset($_SESSION['user'])){
        redirect_to("index.php");
    } else {
?>
<!DOCTYPE html>
<html>
<head>
  <title>Father's Heart</title>
  <link rel="shortcut icon" href="images/FHMM.png" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <style>
            *, *:before, *:after {
  box-sizing: border-box;
}

html {
  overflow-y: scroll;
  padding: 0; margin: 0; border: 0;
}

body {
  background: #ffffff; /* #c1bdba */
  font-family: 'Titillium Web', sans-serif;
  padding: 0; margin: 0; border: 0;
}

a {
  text-decoration: none;
  color: #1ab188;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
a:hover {
  color: #179b77;
}

.form {
  position: relative;
  top: 0;
  height: 100%;
    margin: 0 auto;
  background: #333;
  padding: 0 60px 150px 60px;
  max-width: 600px;
  width: 400px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
    
    /*position: relative;
  top: 0;
  height: 100%;
  margin: 0 auto;
  background: #333;
  padding: 0 60px 60px 60px;
  max-width: 600px;
  width: 400px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);*/
}

.tab-group {
  list-style: none;
  padding: 0;
  margin: 0 0 40px 0;
}
.tab-group:after {
  content: "";
  display: table;
  clear: both;
}
.tab-group li a {
  display: block;
  text-decoration: none;
  padding: 15px;
  background: rgba(160, 179, 176, 0.25);
  color: #a0b3b0;
  font-size: 20px;
  float: left;
  width: 50%;
  text-align: center;
  cursor: pointer;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
.tab-group li a:hover {
  background: #cdcdcd;
  color: #daa81d;
}
.tab-group .active a {
  background: #ededed;
  color: #daa81d;
}

.tab-content > div:last-child {
  display: none;
}

h1 {
  text-align: center;
  color: #ffffff;
  font-weight: 300;
  margin: 0 0 40px;
}

h2 {
    text-align: center;
    color: #1ab188;
    font-weight: 1000;
    margin: 0;
}

span {
    color: #a0b3b0;
    font-weight: bold;
}

p {
    text-align: center;
    color: #ffffff;
    margin: 0px 0px 50px 0px;
}

div.info {
    color: pink;
    display: box;
    text-align: center;
    padding: 5px;
    margin-top: -20px;
    margin-bottom: 15px;
    border: 1px solid red;
    background: #66131c;
}

label {
  position: absolute;
  -webkit-transform: translateY(6px);
          transform: translateY(6px);
  left: 13px;
  color: rgba(255, 255, 255, 0.5);
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
  -webkit-backface-visibility: hidden;
  pointer-events: none;
  font-size: 22px;
}
label .req {
  margin: 2px;
  color: #cdcdcd;
}

label.active {
  -webkit-transform: translateY(50px);
          transform: translateY(50px);
  left: 2px;
  font-size: 14px;
}
label.active .req {
  opacity: 0;
}

label.highlight {
  color: #ffffff;
}

input, textarea {
  font-size: 22px;
  display: block;
  width: 100%;
  height: 100%;
  padding: 5px 10px;
  background: none;
  background-image: none;
  border: 1px solid #a0b3b0;
  color: #ffffff;
  border-radius: 0;
  -webkit-transition: border-color .25s ease, box-shadow .25s ease;
  transition: border-color .25s ease, box-shadow .25s ease;
}
input:focus, textarea:focus {
  outline: 0;
}

textarea {
  border: 2px solid #a0b3b0;
  resize: vertical;
}

.field-wrap {
  position: relative;
  margin-bottom: 40px;
}

.top-row:after {
  content: "";
  display: table;
  clear: both;
}
.top-row > div {
  float: left;
  width: 48%;
  margin-right: 4%;
}
.top-row > div:last-child {
  margin: 0;
}

.button {
  border: 0;
  outline: none;
  border-radius: 0;
  padding: 8px 0;
  font-size: 1.6rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: #ededed;
  color: #daa81d;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-appearance: none;
}
.button:hover, .button:focus {
  background: #cdcdcd;
}

.button-block {
  display: block;
  width: 50%;
}

.forgot {
  margin-top: -20px;
  text-align: right;
}
        p {
            color: white;
        }
        .admin_link {
            position: absolute;
            right: 30px;
            color: #a0b3b0;
            font-weight: 600;
            font-size: 18px;
            text-decoration: underline;
        }
        .admin_link:hover {
            text-decoration: none;
            color: #a0b3b0;
        }
    </style>
</head>
<body>
    <div class="image"></div>
  <div class="form">
      <img src="images/FHMM.png" width="150px" style="margin-left: 25%; padding-top: 60px; padding-bottom: 40px;">
      
      <div class="tab-content">

         <div id="login">   
          <h1>Admin</h1>
          
          <form action="process_login.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              <!--Username--><span class="req"><!--*--></span>
            </label>
            <input type="username" required autocomplete="off" placeholder="Username" name="username"/>
          </div>
          
          <div class="field-wrap">
            <label>
              <!--Password--><span class="req"><!--*--></span>
            </label>
            <input type="password" required autocomplete="off" placeholder="Password" name="password"/>
          </div>
          
          <input type="submit" class="button button-block" name="admin" value="LOGIN"/>
          
          </form>
             <a href="home.php" class="admin_link">Back</a>
        </div>
          
        <div id="signup">   
          <!--<h1>Volunteer</h1>
          
          <form action="process_login.php" method="post" autocomplete="off">
          
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>
          
          <input type="submit" class="button button-block" name="volunteer" value="LOGIN"/>
              
          
          </form>-->

        </div> 
          
      </div><!-- tab-content -->
      <?php
        if(!empty($_SESSION['error'])){
            echo "<br /><span>{$_SESSION['error']}</span>";
        }
      ?>
      
</div> <!-- /form -->
    <script src='js/jquery.min.js'></script>
<!--
    <script src="js/index.js"></script>-->

</body>
</html>
<?php
        }
?>