<?php
$connect = mysqli_connect("localhost", "root", "", "fh");
require_once "functions.php";

$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM recipients 
  WHERE id LIKE '%".$search."%'
  OR firstName LIKE '%".$search."%' 
  OR secondName LIKE '%".$search."%' 
  OR phone LIKE '%".$search."%'
  OR gender LIKE '%".$search."%'
  OR cause LIKE '%".$search."%'
  OR district LIKE '%".$search."%'
  OR distribution LIKE '%".$search."%'
  
 ";
}
else
{
 $query = "
  SELECT * FROM recipients ORDER BY distribution
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
     <th>Id</th>
     <th>Name</th>
     <th>Phone</th>
     <th>Gender</th>
     <th>Cause</th>
     <th>District</th>
     <th>Distribution</th>
     <th></th>
    </tr>
   </thead>
 ';

 while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <tbody>
   <tr>
    <td>DBN0'.$row["id"].'</td>
    <td>'.$row["firstName"] .' '.$row["secondName"].'</td>
    <td>'.$row["phone"].'</td>
    <td>'.$row["gender"].'</td>
    <td>'.$row["cause"].'</td>
    <td>'.$row["district"].'</td>
    <td>'.$row["distribution"].'</td>
    <td class="del"><a href=""><i title="delete" class="fa fa-trash-o fa-fw"></i></a></td>
   </tr>
  </tbody>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>