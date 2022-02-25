
<?php
include "db.php";        

$approve = mysqli_query($con,"update invoice_user set invoice_status ='Paid' where invoice_id='".$_GET['invoice_id']."'")or die(mysqli_error($con));

$back="javascript:history.back()";
  if($approve)

          {

            echo '<script type="text/javascript">';
            echo "alert('Paid Successfully');";
             echo 'window.location.href = "user_profile.php";';
             
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Error ........!!!! TRY AGAIN');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }
        

 ?>