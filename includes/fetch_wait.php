<?php
require_once "connect.php";
require_once "functions.php";

$id = $_GET['distrib_id'];
$distrib_result = mysqli_query($connect, "SELECT * FROM distribution WHERE id = $id LIMIT 1");
$distrib_row = mysqli_fetch_array($distrib_result);
$distribution = $distrib_row['distribution'];
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM $distribution 
  WHERE fullname LIKE '%".$search."%' AND followup = 1
  OR id LIKE '%".$search."%' AND followup = 1
  OR phone LIKE '%".$search."%' AND followup = 1
  OR date LIKE '%".$search."%' AND followup = 1
  OR subcounty LIKE '%".$search."%' AND followup = 1
  OR gender LIKE '%".$search."%' AND followup = 1
 ";
}
else
{
 $query = "
  SELECT * FROM $distribution WHERE followup = 1
 ";
}
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table-striped table-bordered table-hover">
   <thead>
    <tr>
     <th style="text-align: center">Edit</th>
     <th>Id</th>
     <th>Name</th>
     <th>Date</th>
     <th>Gender</th>
     <th>Telephone</th>
     <th>Sub County</th>
     <th style="text-align: center">Delete</th>
    </tr>
   </thead>
 ';

 while($row = mysqli_fetch_array($result))
 {
  
  $output .= '
  <tbody>
   <tr>
    <td style="text-align: center"><a href="edit_profile.php?distrib_id='.$id.'&id='.$row["id"].'&page=123"><i class="fa fa-pencil fa-fw" title="edit" style="color: #555;"></i></a></td>
    <td>'.$row["id"].'</td>
    <td><a href=\'#\' class=\'profile\' id=\'' . $row["id"] . '\' onclick=\'showUser(this.id)\' data-toggle=\'modal\' data-target=\'#myModal\'>'.$row["fullname"].'</a></td>
    <td>'.$row["date"].'</td>
    <td>'.$row["gender"].'</td>
    <td>'.$row["phone"].'</td>
    <td>'.$row["subcounty"].'</td>
    <td class="del" style="text-align: center"><a href="deletew.php?distrib_id='.$id.'&del_id='.$row["id"].'"><i title="delete" class="fa fa-trash-o fa-fw"  style="color: gray; font-size: 17px;"></i></a></td>
   </tr>
  </tbody>
  ';
 }
 echo $output;
}
else
{
 echo 'Recipients Not Found.';
}

?>