<?php 
    require_once "connect.php";
    require_once "functions.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $sql = "SELECT district FROM all_districts WHERE id={$id}";
        $result = mysqli_query($connect, $sql);
        $row= mysqli_fetch_array($result);
        $district = $row['district'];
        $distrib_result = mysqli_query($connect, "SELECT * FROM distribution WHERE district = '$district'");
        
        echo '<div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover">
                   <thead>
                    <tr>
                     <th>Name</th>
                     <th>Phone Number</th>
                     <th>Disability</th>
                     <th>Cause of Disability</th>
                     <th>Sub County</th>
                     <th>Distribution</th>
                    </tr>
                   </thead>';
        if(isset($_POST["query"]))
        {
         while($distrib_row = mysqli_fetch_array($distrib_result)){
             $distribution = $distrib_row['distribution'];
             $distrib_id = $distrib_row['id'];
             $search = mysqli_real_escape_string($connect, $_POST["query"]);
             $query = "
              SELECT * FROM $distribution 
              WHERE fullname LIKE '%".$search."% AND followup = 0'
              OR phone LIKE '%".$search."% AND followup = 0' 
              OR disability LIKE '%".$search."% AND followup = 0' 
              OR causeofdisability LIKE '%".$search."% AND followup = 0' 
              OR subcounty LIKE '%".$search."% AND followup = 0'
             ";
             $result = mysqli_query($connect, $query);
             
                 while($row = mysqli_fetch_array($result))
                 {
                  echo '
                  <tbody>
                   <tr>
                    <td>'.$row["fullname"].'</td>
                    <td>'.$row["phone"].'</td>
                    <td>'.$row["disability"].'</td>
                    <td>'.$row["causeofdisability"].'</td>
                    <td>'.$row["subcounty"].'</td>
                    <td><a href="index2.php?distrib_id='.$distrib_id.'">'.$distribution.'</a></td>
                   </tr>
                  </tbody>
                  ';
                 }
                
                 }
        }
        else
        {
         while($distrib_row = mysqli_fetch_array($distrib_result)){
             $distribution = $distrib_row['distribution'];
             $distrib_id = $distrib_row['id'];
             $query = "SELECT * FROM $distribution WHERE district = '{$district}' AND followup = 0 ORDER BY id";
             $result = mysqli_query($connect, $query);
             if(mysqli_num_rows($result) > 0){

                 while($row = mysqli_fetch_array($result))
                 {
                  echo '
                  <tbody>
                   <tr>
                    <td>'.$row["fullname"].'</td>
                    <td>'.$row["phone"].'</td>
                    <td>'.$row["disability"].'</td>
                    <td>'.$row["causeofdisability"].'</td>
                    <td>'.$row["subcounty"].'</td>
                    <td><a href="index2.php?distrib_id='.$distrib_id.'">'.$distribution.'</a></td>
                   </tr>
                  </tbody>
                  ';
                 }
               }
            }
        }
        
        
    } else {
        redirect_to("welcome.php");
    }
?>