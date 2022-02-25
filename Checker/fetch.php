<?php 
  include("db.php");
 
   $sql = "SELECT * FROM fine_user WHERE fine_id='".$_POST['fine_id']."'";
   $query = mysqli_query($con,$sql);
   while($row = mysqli_fetch_assoc($query))
   {
         $data = $row;
   }
    echo json_encode($data);
 ?>