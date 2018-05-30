<?php
require_once "connect.php";
require_once "functions.php";

$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM distribution 
  WHERE distribution LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM distribution ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
  $district = $row['district'];
  $quer = mysqli_query($connect, "SELECT * FROM all_districts WHERE district = '$district'");
  $code = mysqli_fetch_array($quer);
  $output .= '
  <a href=\'index2.php?distrib_id='.$row['id'].'\' class=\'btn btn-default\'>'.$row['distribution'].'</a>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>