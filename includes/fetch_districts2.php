<?php
require_once "connect.php";
require_once "functions.php";

session_start();

$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM all_districts 
  WHERE district LIKE '%".$search."%' ";
}
else
{
 $query = "
  SELECT * FROM all_districts";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
$output = '';
    while($row = mysqli_fetch_array($result)){
    $district = $row['district'];
    $output .= '
    <div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">'.
    $row['district'].'
    </div>
    <div class="panel-body">
    <div class="list-group">
    <div class="scroll-area">';

    $distrib_result = mysqli_query($connect, "SELECT * FROM distribution WHERE district = '$district'");
    if($_SESSION['user'] == 'volunteer'){
         while($distrib_row = mysqli_fetch_array($distrib_result)){
            $output .= '<a href=\'page.php?distrib_id=' . $distrib_row['id'] . '\' class=\'btn btn-default\'>'.$distrib_row['distribution'].'</a>&nbsp;';
        }
     }else{
         while($distrib_row = mysqli_fetch_array($distrib_result)){
            $output .= '<a href=\'index2.php?distrib_id=' . $distrib_row['id'] . '\' class=\'btn btn-default\' id=' . $distrib_row['id'] . ' onclick=\'showUser(this.id)\' >'.$distrib_row['distribution'].'</a><a href=\'page.php?distrib_id=' . $distrib_row['id'] . '\' class=\'btn btn-default\'><i class=\'fa fa-plus\'></i></a>&nbsp;';
        }
     }
     $output .='</div>';
     if($_SESSION['user'] == 'volunteer'){
         
     } else {
    $output .= '<a href="recipients.php?id='. urlencode($row['id']).'" class="list-group-item"><span class="badge"><i class="fa fa-table"></i></span>
    View Recipients
    </a>';}
    if($_SESSION['user'] == 'volunteer'){
        
    } else { 
    $output .= '<a href="distribution.php?dist_id='.urlencode($row['id']).'" class="list-group-item"><span class="badge"><i class="fa fa-plus"></i></span>Add New Distribution</a>';
     } 
     $output .=
    '</div>
    </div>
    </div>
    </div>';
}
    echo $output;
}
else
{
 echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: red; font-size: 20px;"><b>District not found</b></span>';
}

?>