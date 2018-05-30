<?php
require_once "connect.php";
require_once "functions.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
div.stars {
  width: 180px;
  display: inline-block;
    position: absolute;
    left: 0;
}
input.star {
    display: none;
}
label.fa-star {
    font-size: 22px;
    padding: 5px;
    float: right;
    color: #444;
}
input.star:checked ~ label.fa-star:before {
    color: #FD4;
}
input.star-5:checked ~ label.star:before {
  color: #ba3;
  text-shadow: 0 0 20px #952;
}
input[type:submit] {

}
input.star-1:checked ~ label.star:before { color: #F62; }
</style>
</head>
<body>

<?php
$id = $_GET['distrib_id'];

$distrib_result = mysqli_query($connect, "SELECT * FROM distribution WHERE id = $id");
$distrib_row = mysqli_fetch_array($distrib_result);
$distribution = $distrib_row['distribution'];
$q = intval($_GET['q']);
    
$sql="SELECT * FROM $distribution WHERE id = '".$q."'";
$result = mysqli_query($connect,$sql); 
$row = mysqli_fetch_array($result);
    
$user_name = $_SESSION['name'];
$reci_name = $row['fullname'];
$rate_result = mysqli_query($connect, "SELECT rating FROM ratings WHERE staff = '$user_name' AND recipient = '$reci_name'") or die(mysqli_error($connect));
$rate_row = mysqli_fetch_array($rate_result);
$rate = $rate_row['rating'];

    ?>
    
<!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">-->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Name: <?php echo $row['fullname']." ".$user_name;?></h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-6">
            <img src="<?php echo $row['beforee'];?>" alt="before" title="<?php echo $row['beforee'];?>" style="width: 100%" />
              </div>
              <div class="col-md-6">
            <img src="<?php echo $row['afterr'];?>" alt="before" title="<?php echo $row['afterr'];?>" style="width: 100%" />
              </div>
          </div>
          <br />
            <table>
                <tr>
                    <?php echo "<td>Age: </td><td>" . $row['age'] . "</td>"; ?>
                </tr>
                <tr>
                    <?php echo "<td>Gender: </td><td>" . $row['gender'] . "</td>"; ?>
                </tr>
                <tr>
                    <?php echo "<td>Disability: </td><td>" . $row['disability'] . "</td>"; ?>
                </tr>
                <tr>
                    <?php echo "<td>Cause Disability: </td><td>" . $row['causeofdisability'] . "</td>"; ?>
                </tr>
            </table><br />
            Story: <br /><div id="story" style="height:200px; overflow-y: scroll; text-align: justify; padding: 0px 5px;"><?php echo $row['disabilitystory']; ?></div>
            
        </div>
              <div class="modal-footer">
                  <div class="stars">
                        <form action="process_rating.php" method="post" id="photo_form" name="photo_form">
                            <input type="text" name="reci_name" value="<?php echo $row['fullname'];?>" hidden="hidden"/>
                            <input type="text" name="distrib_id" value="<?php echo $_GET['distrib_id'];?>" hidden="hidden"/>
                            <input type="text" name="follow" value="<?php echo $row['followup'];?>" hidden="hidden"/>
                            <input class="photo star star-5" id="star-5" value="5" type="radio" name="photo_rating" onclick="document.photo_form.submit()" <?php if($rate == 5){ echo 'checked';}?>/>
                            <label class="fa fa-star star-5" for="star-5"></label>
                            <input class="photo star star-4" id="star-4" value="4" type="radio" name="photo_rating" onclick="document.photo_form.submit()" <?php if($rate == 4){ echo 'checked';}?>/>
                            <label class="fa fa-star star-4" for="star-4"></label>
                            <input class="photo star star-3" id="star-3" value="3" type="radio" name="photo_rating" onclick="document.photo_form.submit()" <?php if($rate == 3){ echo 'checked';}?>/>
                            <label class="fa fa-star star-3" for="star-3"></label>
                            <input class="photo star star-2" id="star-2" value="2" type="radio" name="photo_rating" onclick="document.photo_form.submit()" <?php if($rate == 2){ echo 'checked';}?>/>
                            <label class="fa fa-star star-2" for="star-2"></label>
                            <input class="photo star star-1" id="star-1" value="1" type="radio" name="photo_rating" onclick="document.photo_form.submit()" <?php if($rate == 1){ echo 'checked';}?>/>
                            <label class="fa fa-star star-1" for="star-1"></label>
                        </form>
                    </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        <!--<script src="../js/jquery-1.10.2.js"></script>
        <script>
            $(document).ready(function(){
                $('.photo').click(function(){
                    $('#photo_form').submit();
                });
            });
        </script>-->
        <!--</div>-->
          
<?php
mysqli_close($connect);
?>
    
</body>
</html>