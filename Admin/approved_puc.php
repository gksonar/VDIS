
<?php
include "db.php";
 $approve = mysqli_query($con,"update puc_user set puc_status ='Accepted' where p_id='".$_GET['p_id']."'")or die(mysqli_error($con));

$back="javascript:history.back()";
  if($approve)

          {

            echo '<script type="text/javascript">';
            echo "alert('Status Accepted Successfully');";
             echo 'window.location.href = "requested_puc.php";';
             
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('User Not Approve');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

 ?>