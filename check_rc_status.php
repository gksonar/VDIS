

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
            <h3 class="" style="margin-left: 35%;"  >
                Registration of Vehicle STATUS
            </h3>
          
          </div>
          <div class="row">
           
            
              <?php
                   require 'db.php';
                   extract($_GET);                              
                   $select = "SELECT rc_user.*,user_register.* FROM rc_user INNER JOIN user_register ON rc_user.user_id = user_register.user_id where rc_user.user_id='".$_SESSION['user_id']."'";
                    if ($result = $con->query($select))
                    {
                      while ($data = $result->fetch_assoc())
                      { 
                    
                      echo'<div class="col-md-4 grid-margin stretch-card" style="margin-left: 35%;    max-width: 60%;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                  <div class="row">
                    <div class="col-9">
                      <h4 class="card-title"> <i class="far fa-futbol"></i>Status of RC </h4>
                    </div>
                    <div class="col-3">
                      
                     <a href="user_profile.php" style="float:right;"><i class="fa fa-window-close">   Close</i></a>
                    </div>
                  </div>
                    <br style="margin-bottom:10px">
                    RC no: '.$data["r_id"].' - Owner Name:  '.$data["user_name"].'<br> Vehicle No: '.$data["rc_vehicle_no"].'
                  </h4>';
                  if($data["rc_status"]=='Pending')
                  {
                      echo'<ul class="solid-bullet-list">
                    <li>
                      <h5>Pending                       
                      </h5>
                      <p class="text-muted">You Are in this Status</p>
                     
                    </li>
                    <li>
                      <h5>Accepted                       
                      </h5>
                      <p class="text-muted"></p>
                    </li>
                    <li>
                      <h5>Rejected                       
                      </h5>
                      <p class="text-muted"></p>
                    </li>

                   


                  </ul>';
                  }
                  elseif($data["rc_status"]=="Accepted")
                  {
                      echo'<ul class="solid-bullet-list">
                    <li>
                      <h5>Pending                       
                      </h5>
                      <p class="text-muted"></p>
                     
                    </li>
                    <li>
                      <h5>Accepted                       
                      </h5>
                      <p class="text-muted">You Are in this Status</p>
                    </li>
                    <li>
                      <h5>Rejected                       
                      </h5>
                      <p class="text-muted"></p>
                    </li>

                   


                  </ul>';
                  }
                  elseif($data["rc_status"]=="Rejected")
                  {
                      echo'<ul class="solid-bullet-list">
                    <li>
                      <h5>Pending                       
                      </h5>
                      <p class="text-muted"></p>
                     
                    </li>
                    <li>
                      <h5>Accepted                       
                      </h5>
                      <p class="text-muted"></p>
                    </li>
                    <li>
                      <h5>Rejected                       
                      </h5>
                      <p class="text-muted">You Are in this Status</p>
                    </li>

                   


                  </ul>';
                 
                  }
                 echo'
                  <div class="border-top pt-3">
                    <div class="d-flex justify-content-between">
                      <a href="user_profile.php" class="btn btn-outline-dark">Home</a>
                      <a href="view_rc_user.php?user_id='.$data["user_id"].'" class="btn btn-primary btn-icon-text">
                        View Details
                        
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>'; } } ?>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:admin/partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
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
