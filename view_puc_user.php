

<?php
   //include("db.php");
  session_start();
?> 

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/forms/basic_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:07:32 GMT -->
<head>
   <meta charset="utf-8" />
    
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />

    <!-- Color Switcher Mockup -->
    <link href="css/color-switcher-design.css" rel="stylesheet" />

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="admin/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="admin/ images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:admin/partials/_navbar.html -->
    
    <?php include "header-1.php";?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:admin/partials/_settings-panel.html -->
      
      <!-- partial -->
      <!-- partial:admin/partials/_sidebar.html -->
     
      <!-- partial -->
      <div class="main-panel" style="    width: calc(120% - 255px);">        
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="" style="margin-left: 20%;"  >
                Polution Under Control Certificate
            </h3>
          
          </div>
          <div class="row">
            <div class="col-12" style="margin-left: 20%;    max-width: 60%;">
              <div class="card">
                <div class="card-body">
                  <div class="container ">
                     <div class="row">
                    <div class="col-9">
                      <h4 class="card-title">View Pollution Under Control Certificate</h4>
                    </div>
                    <div class="col-3">
                      
                     <a href="user_profile.php" style="float:right;"><i class="fa fa-window-close">   Close</i></a>
                    </div>
                  </div>
                  <form class="form-sample" id="" method="POST" action="">
                    <p class="card-description">
                      PUC info
                    </p>
                    <?php
                   require 'db.php';
                   extract($_GET);                              
                   $select = "SELECT puc_user.*,user_register.* FROM puc_user INNER JOIN user_register ON puc_user.user_id = user_register.user_id where puc_user.user_id='".$_SESSION['user_id']."'";
                    if ($result = $con->query($select))
                    {
                      while ($data = $result->fetch_assoc())
                      { 
                    
                      echo'
                    <div class="row pricing-table">
                      <div class="col-md-9 grid-margin stretch-card pricing-card" style="margin: 5% 15%;">
                        <div class="card border-primary border pricing-card-body">
                          <div class="text-center pricing-card-head">
                            <h3>'.$data["puc_status"].'</h3>';
                            if($data["p_plan_period"]==1)
                            {
                              echo'<p>6 Months</p>';
                            }
                            elseif($data["p_plan_period"]==2)
                            {
                              echo'<p>1 Year</p>';
                            }
                            elseif($data["p_plan_period"]==3)
                            {
                              echo'<p>2 Year</p>';
                            }
                            elseif($data["p_plan_period"]==4)
                            {
                              echo'<p>3 Year</p>';
                            }
                            elseif($data["p_plan_period"]==5)
                            {
                              echo'<p>5 Year</p>';
                            }
                            echo'
                            
                            <h1 class="font-weight-normal mb-4">PUC No: '.$data["p_id"].'</h1>
                          </div>
                           <input type="hidden"  name="p_id" value='.$data["p_id"].'>
                      <div class="py-4">
                        <p class="clearfix">
                          <span class="float-left">
                           PUC Number
                          </span>
                          <span class="float-right text-muted" ">
                            '.$data["p_id"].'
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            User Name : 
                          </span>
                          <span class="float-right text-muted">
                            '.$data["user_name"].'
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Vehicle Number :
                          </span>
                          <span class="float-right text-muted">
                           '.$data["puc_vehicle_no"].'
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                           Email :
                          </span>
                          <span class="float-right text-muted">
                            '.$data["user_email"].'
                          </span>
                        </p>                        
                        <p class="clearfix">
                          <span class="float-left">
                            Fuel :
                          </span>
                          <span class="float-right text-muted">
                            '.$data["puc_fuel_type"].'
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Vehicle Type
                          </span>
                          <span class="float-right text-muted">
                             '.$data["puc_vehicle_type"].'
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Issue Date :
                          </span>
                          <span class="float-right text-muted">
                            '.$data["puc_issue_date"].'
                          </span>
                        </p>

                        <p class="clearfix">
                          <span class="float-left">
                            Date Of Expiry :
                          </span>
                          <span class="float-right text-muted">';
                           
                           if($data['p_plan_period']=="2")
                           {
                            echo date("Y-m-d",strtotime('+ 365 days'));
                           }
                           elseif($data['p_plan_period']=="1")
                           {
                             echo date("Y-m-d",strtotime('+ 180 days'));
                           }
                           elseif($data['p_plan_period']=="3")
                           {
                             echo date("Y-m-d",strtotime('+ 730 days'));
                           }
                           elseif($data['p_plan_period']=="4")
                           {
                             echo date("Y-m-d",strtotime('+ 1095 days'));
                           }
                          elseif($data['p_plan_period']=="5")
                           {
                             echo date("Y-m-d",strtotime('+ 1825 days'));
                           }
                           echo'
                          </span>
                        </p>
                        
                      </div>
                          <div class="wrapper">
                            <a href="#" class="btn btn-outline-primary btn-block">Print</a>
                          </div>                        
                        </div>
                      </div>                     
                        
                    </div>'; } } ?>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:admin/partials/_footer.html -->
        <?php include"footer.php";?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/nav-tool.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>
  </body>

  <script src="admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="admin/js/off-canvas.js"></script>
  <script src="admin/js/hoverable-collapse.js"></script>
  <script src="admin/js/misc.js"></script>
  <script src="admin/js/settings.js"></script>
  <script src="admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="admin/js/file-upload.js"></script>
  <script src="admin/js/typeahead.js"></script>
  <script src="admin/js/select2.js"></script>
   
 
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/forms/basic_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:07:34 GMT -->
</html>
