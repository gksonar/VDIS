<?php
//print_r($_POST); 
include "db.php";
if(isset($_POST))
{
     extract($_POST);
     $sql = "DELETE FROM `user_register` WHERE user_id = '$user_id'";
//echo $sql;
 $res =  mysqli_query($con,$sql);
 if($res)
  {
      echo "1";
  }
  
  
}

?>
