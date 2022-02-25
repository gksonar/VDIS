<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">

  <link rel="stylesheet" href="css/style.css">

  <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>

<body>



    
                    <?php
                                            require 'db.php';
                                            extract($_POST);
                                             $select = "SELECT puc_user.*,user_register.* FROM puc_user INNER JOIN user_register ON puc_user.user_id = user_register.user_id where user_register.user_id='$user_id'";
                                            mysqli_query($con,"SET CHARACTER SET 'utf8'");
                                            mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
                                                           //echo $select;
                                                           if ($result = $con->query($select))
                                                               {
                                                                 while ($data = $result->fetch_assoc())
                                                                {
                                                                    
                                                                 
                                                                  echo '<div class="container">                               
                           
                                

                                <div class="row">
                                <div class="col-6">
                                  <h6 class="subtitle" text-left>PUC Information</h6>
                                  </div>
                               
                                </div>                     
                                  <dl class="row mb-4">
                                    <dt class="col-6  font-weight-normal text-left">PUC No</dt>
                                    <dd class="col-6 text-right">'.$data["p_id"].'</dd>
                                    <dt class="col-6  font-weight-normal text-left">Name</dt>
                                    <dd class="col-6 text-right">'.$data["user_name"].'</dd>
                                    <dt class="col-6  font-weight-normal text-left">puc_vehicle_no</dt>
                                    <dd class="col-6 text-right">'.$data["puc_vehicle_no"].'</dd>
                                    <dt class="col-6  font-weight-normal text-left">Fuel Used</dt>
                                    <dd class="col-6 text-right">'.$data["puc_fuel_type"].'</dd>
                                    <dt class="col-6  font-weight-normal text-left">Vehicle Type</dt>
                                    <dd class="col-6 text-right">'.$data["puc_vehicle_type"].'</dd>
                                    <dt class="col-6  font-weight-normal text-left">Vehicle Class</dt>
                                    <dd class="col-6 text-right">'.$data["puc_vehicle_class"].'</dd>
                                    <dt class="col-6  font-weight-normal text-left">PUC Amount</dt>
                                    <dd class="col-6 text-right">'.$data["p_plan_amount"].'</dd>
                                    <dt class="col-6  font-weight-normal text-left">Issue Date </dt>
                                    <dd class="col-6 text-right">'.$data["puc_issue_date"].'</dd>
                                    <dt class="col-6  font-weight-normal text-left">Valid Upto</dt>
                                    <dd class="col-6 text-right"><b>'.$data["puc_valid_upto"].'</b></dd>
                                    <dt class="col-6  font-weight-normal text-left">Status</dt>
                                    <dd class="col-6 text-right"><b>'.$data["puc_status"].'</b></dd>
                                  
                                  </dl>
                            </div>'; 
                            } } ?>
   

</body>
</html>

