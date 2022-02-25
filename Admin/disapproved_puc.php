<?php
include "db.php";
 $approve = mysqli_query($con,"update puc_user set puc_status ='Rejected' where p_id='".$_GET['p_id']."'")or die(mysqli_error($con));

$back="javascript:history.back()";
  if($approve)

          {

            echo '<script type="text/javascript">';
            echo "alert('PUC REJECTED');";
             echo 'window.location.href = "'.$back.'";';
             
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('NOT REJECTED');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

 ?>