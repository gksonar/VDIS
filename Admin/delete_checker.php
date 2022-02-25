<?php
//print_r($_POST); 
include "db.php";
if(isset($_POST))
{
     extract($_POST);
     $sql = "DELETE FROM `checker_info` WHERE c_id = '$c_id'";
//echo $sql;
 $res =  mysqli_query($con,$sql);
 if($res)
  {
      echo "1";
  }
  
  
}

?>
