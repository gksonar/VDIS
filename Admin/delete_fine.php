<?php
//print_r($_POST); 
include "db.php";
if(isset($_POST))
{
     extract($_POST);
     $sql = "delete from fine_user where fine_id = '$fine_id'";
//echo $sql;
 $res =  mysqli_query($con,$sql);
 if($res)
  {
      echo "1";
  }
  
  
}

?>
