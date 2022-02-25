
<?php
include "db.php";
 $approve = mysqli_query($con,"update rc_user set rc_status ='Accepted' where r_id='".$_GET['r_id']."'")or die(mysqli_error($con));

$back="javascript:history.back()";
  if($approve)

          {

            echo '<script type="text/javascript">';
            echo "alert('Status Accepted Successfully');";
             echo 'window.location.href = "requested_rc.php";';
             
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Not Accepted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

 ?>