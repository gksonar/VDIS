
<?php
include "db.php";        
 $select = "SELECT puc_user.*,user_register.* FROM puc_user INNER JOIN user_register ON puc_user.user_id = user_register.user_id where puc_user.p_id='".$_GET['p_id']."'"; 
  if ($result = $con->query($select))
  {
    while ($data = $result->fetch_assoc())
    {      
                           if($data['p_plan_period']=="2")
                           {
                            $ed= date("Y-m-d",strtotime('+ 365 days'));
                           }
                           elseif($data['p_plan_period']=="1")
                           {
                             $ed= date("Y-m-d",strtotime('+ 180 days'));
                           }
                           elseif($data['p_plan_period']=="3")
                           {
                             $ed= date("Y-m-d",strtotime('+ 730 days'));
                           }
                           elseif($data['p_plan_period']=="4")
                           {
                             $ed= date("Y-m-d",strtotime('+ 1095 days'));
                           }
                          elseif($data['p_plan_period']=="5")
                           {
                             $ed= date("Y-m-d",strtotime('+ 1825 days'));
                           }
                         }

                                  
$curr_date=date("Y-m-d");
$approve = mysqli_query($con,"update puc_user set puc_status ='Paid',puc_issue_date='$curr_date', puc_valid_upto='$ed' where p_id='".$_GET['p_id']."'")or die(mysqli_error($con));

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
        }

 ?>