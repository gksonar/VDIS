<?php
include "db.php";
 $approve = mysqli_query($con,"update rc_user set rc_status ='Rejected' where r_id='".$_GET['r_id']."'")or die(mysqli_error($con));

$back="javascript:history.back()";
  if($approve)

          {

            echo '<script type="text/javascript">';
            echo "alert('RC REJECTED');";
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