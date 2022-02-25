<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/ui-features/modals.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:57 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../admin/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="../admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../admin/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../admin/images/favicon.png" />
</head>
<body>
                           <?php
    
                              require 'db.php';
                              extract($_GET);
                                $select = "SELECT rc_user.*,user_register.* FROM rc_user INNER JOIN user_register ON rc_user.user_id = user_register.user_id where rc_user.rc_vehicle_no='".$_GET['sid']."'";
                              
                                             if ($result = $con->query($select))
                                                 {
                                                   while ($data = $result->fetch_assoc())
                                                  { 
                                                  
                                                    echo '


 <div class="py-4">
                        <p class="clearfix">
                          <span class="float-left">
                           Name Of User
                          </span>
                          <span class="float-right text-muted" >
                            '.$data["rc_vehicle_no"].'
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Vehicle no 
                          </span>
                          <span class="float-right text-muted">
                            '.$data["user_name"].'
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                           Model-color
                          </span>
                          <span class="float-right text-muted">
                           '.$data["puc_vehicle_no"].'
                          </span>
                        </p>
                        <h5 class="modal-title" id="">Puc Information</h5>
                        <p class="clearfix">
                          <span class="float-left">
                          PUC No - Status 
                          </span>
                          <span class="float-right text-muted">
                            '.$data["user_email"].'
                          </span>
                        </p>  
                          <p class="clearfix">
                          <span class="float-left">
                          PUC Expiry Date
                          </span>
                          <span class="float-right text-muted">
                            '.$data["user_email"].'
                          </span>
                        </p>';
                             }}
  
                              extract($_GET);
                                $select = "SELECT puc_user.*,user_register.* FROM puc_user INNER JOIN user_register ON puc_user.user_id = user_register.user_id where puc_user.puc_vehicle_no='".$_GET['sid']."'";
                              
                                             if ($result = $con->query($select))
                                                 {
                                                   while ($data = $result->fetch_assoc())
                                                  { 
                                                  
                                                    echo'
                         <h5 class="modal-title" id="">RC Information</h5>                   
                        <p class="clearfix">
                          <span class="float-left">
                            RC No 
                          </span>
                          <span class="float-right text-muted">
                           '.$data["puc_fuel_type"].'
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            RC Date
                          </span>
                          <span class="float-right text-muted">
                             '.$data["puc_vehicle_type"].'
                          </span>
                        </p>
                        <h5 class="modal-title" id="">Licence Information</h5>  
                        <p class="clearfix">
                          <span class="float-left">
                            Driving Licence Number
                          </span>
                          <span class="float-right text-muted">
                            '.$data["puc_vehicle_class"].'
                          </span>
                        </p>
                      </div>';
                     } } ?>
</body>
</html>