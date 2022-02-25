

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
                      <h4 class="card-title">Amount Pay for PUC</h4>
                    </div>
                    <div class="col-3">
                      
                     <a href="user_profile.php" style="float:right;"><i class="fa fa-window-close">   Close</i></a>
                    </div>
                  </div>
                  <form class="form-sample" id="" method="POST" action="">
                    <p class="card-description">
                      PUC info
                    </p>
              <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
               
                  <div class="template-demo">
                    <table class="table mb-0">
                      <thead>
                        <tr>
                          <th class="pl-0">Puc No</th>
                          <th class="pl-0">Owner Name</th>
                          <th class="pl-0">Vehicle No</th>
                          <th class="pl-0">Status</th>
                          <th class="pl-0">Pay</th>
                        </tr>
                      </thead>





                      <?php
                   require 'db.php';
                   extract($_GET);                              
                   $select = "SELECT puc_user.*,user_register.* FROM puc_user INNER JOIN user_register ON puc_user.user_id = user_register.user_id where puc_user.user_id='".$_SESSION['user_id']."'";
                    if ($result = $con->query($select))
                    {
                      while ($data = $result->fetch_assoc())
                      { 
                    
                      echo'<tbody>
                        <tr>
                          <td class="pl-0">'.$data["p_id"].'</td>
                          <td class="pl-0">'.$data["user_name"].'</td>
                          <td class="pl-0">'.$data["puc_vehicle_no"].'</td>';
                  if($data["puc_status"]=='Pending')
                  {
                      echo'<td class="pr-0 "><div class="badge badge-primary badge-pill">Pending</div></td>
                      <td class="pr-0 ">
                      <a href="view_puc_user.php?p_id='.$data["p_id"].'"><div class="badge badge-info">View</div></a>

                     <a href="user_profile.php?p_id='.$data["p_id"].'"> <div class="badge badge-danger ">Cancel</div></a>
                      </td>

                      ';
                  }
                  elseif($data["puc_status"]=="Accepted")
                  {
                      echo'<td class="pr-0 "><div class="badge badge-info badge-pill">Accepted</div></td>
                      <td class="pr-0 "><a href="pay_puc_amount.php?p_id='.$data["p_id"].'"><div class="badge badge-primary ">Pay</div></a>
                     <a href="user_profile.php?p_id='.$data["p_id"].'"> <div class="badge badge-danger ">Cancel</div></a>
                      </td>
                      ';
                  }
                  elseif($data["puc_status"]=="Rejected")
                  {
                    echo'<td class="pr-0 "><div class="badge badge-danger badge-pill">Rejected</div></td>
                    <td class="pr-0 ">
                    <a href="view_puc_user.php?p_id='.$data["p_id"].'"><div class="badge badge-info">View</div></a>
                   <a href="user_profile.php?p_id='.$data["p_id"].'"> <div class="badge badge-danger ">Cancel</div></a>
                    </td>
                    ';
                  }
                  elseif($data["puc_status"]=="Paid")
                  {
                      echo'<td class="pr-0 "><div class="badge badge-success badge-pill">Paid</div></td>
                      <td class="pr-0 ">
                      <a href="view_puc_user.php?p_id='.$data["p_id"].'"><div class="badge badge-info">View</div></a>
                     <a href="user_profile.php?p_id='.$data["p_id"].'"> <div class="badge badge-danger ">Cancel</div></a>
                      </td>
                      ';
                  }
                          echo'

                        </tr>
                        
                      </tbody>'; } } ?>







                    </table>
                  </div>
                </div>
              </div>
            </div>
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


