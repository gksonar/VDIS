
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
                Registration of Vehicle
            </h3>

          
          </div>
          <div class="row">
           
            <div class="col-12 grid-margin" style="margin-left: 20%;    max-width: 60%;">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <h4 class="card-title">Registration of Vehicle</h4>
                    </div>
                  <div class="col-3">
                      
                     <a href="user_profile.php" style="float:right;"><i class="fa fa-window-close">   Close</i></a>
                    </div>
                  </div>
                  

                  

                  <form class="form-sample" id="" method="POST" action="">
                    <p class="card-description">
                     RC info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Vehicle No.</label>
                          <div class="col-sm-9">
                            <input type="text" id="vehicle_no_plate" name="rc_vehicle_no" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Vehicle Type</label>
                          <div class="col-sm-9">
                            <select class="form-control form-control-lg" name="rc_vehicle_type">
                              <option>-----Select Type-----</option>
                              <option value="2 Wheelar">2 Wheelar</option>
                              <option value="3 Wheelar">3 Wheelar</option>
                              <option value="4 Wheelar">4 Wheelar</option>
                              <option value="4+ Wheelar">4+ Wheelar</option>
                             
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
               
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Fuel Used</label>
                          <div class="col-sm-9">
                              <select class="form-control form-control-lg" name="rc_fuel_type">
                              <option>-----Select Fuel-----</option>
                              <option value="Petrol">Petrol</option>
                              <option value="Diesel">Diesel</option>
                              <option value="Gas">GAS</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Vehicle Color</label>
                          <div class="col-sm-9">
                            <input type="text" id="" class="form-control" name="rc_vehicle_color"/>
                          </div>
                        </div>
                      </div>
                     
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Vehicle Model</label>
                          <div class="col-sm-9">
                            <input type="text" id="" class="form-control" name="rc_vehicle_model"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Vehicle Seat Capacity</label>
                          <div class="col-sm-9">
                            <input type="text" id="" class="form-control" name="rc_vehicle_seat_capacity"/>
                          </div>
                        </div>
                      </div>
                    </div> 

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Engine No</label>
                          <div class="col-sm-9">
                            <input type="text" id="" class="form-control" name="rc_engine_no"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Chasis Number</label>
                          <div class="col-sm-9">
                            <input type="text" id="" class="form-control" name="rc_chasis_no"/>
                          </div>
                        </div>
                      </div>
                    </div> 
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Apply</button>
                    <button type="submit" class="btn btn-light">Clear</button>                   
                  </form>
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
  
  <script type="">  
    $(":input").inputmask();
    $("#vehicle_no_plate").inputmask( {"mask": "A{2} 9{1,2} A{1,3} 9{4}"});
  </script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/forms/basic_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:07:34 GMT -->
</html>
<?php
include'db.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
extract($_POST);
$user_id=$_SESSION['user_id'];
$rc_issue_date= date("Y-m-d");
$rc_valid_upto=date("Y-m-d",strtotime('+ 5475 days'));
$query="INSERT INTO `rc_user`( `user_id`, `rc_vehicle_no`, `rc_engine_no`, `rc_chasis_no`, `rc_vehicle_class`, `rc_vehicle_type`,  `rc_fuel`, `rc_body_color`, `rc_seat_cap`, `rc_status`, `rc_issue_date`, `rc_valid_upto`) VALUES ('$user_id', '$rc_vehicle_no', '$rc_engine_no', '$rc_chasis_no', '$rc_vehicle_model', '$rc_vehicle_type', '$rc_fuel_type', '$rc_vehicle_color', '$rc_vehicle_seat_capacity', 'Pending', '$rc_issue_date', '$rc_valid_upto')";
$asd = mysqli_query($con,$query)or die(mysqli_error($con));

if($asd)
{
  echo '<script type="text/javascript">';
  echo " alert('Applied Successfully');";
  echo 'window.location.href = "user_profile.php";';
  echo '</script>';
}  
else
{ 
  echo '<script type="text/javascript">';
  echo " alert('Fill Again The Registration Form.');";
  echo 'window.location.href = "apply_puc.php";';
  echo '</script>';
}

}
?>