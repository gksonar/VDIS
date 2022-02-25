
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
           
            <div class="col-12 grid-margin" style="margin-left: 20%;    max-width: 60%;">
              <div class="card">
                <div class="card-body">
                     <div class="row">
                    <div class="col-9">
                      <h4 class="card-title">Polution Under Control Certificate</h4>
                    </div>
                    <div class="col-3">
                      
                     <a href="user_profile.php" style="float:right;"><i class="fa fa-window-close">   Close</i></a>
                    </div>
                  </div>
                  <form class="form-sample" id="" method="POST" action="">
                    <p class="card-description">
                      PUC info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Vehicle No.</label>
                          <div class="col-sm-9">
                            <input type="text" id="vehicle_no_plate" name="puc_vehicle_no" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Vehicle Type</label>
                          <div class="col-sm-9">
                            <select class="form-control form-control-lg" name="puc_vehicle_type">
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
                              <select class="form-control form-control-lg" name="puc_fuel_type">
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
                          <label class="col-sm-3 col-form-label">PUC Period</label>
                          <div class="col-sm-9">
                              <select class="form-control form-control-lg" id="puc_plan_id" name="puc_plan_period">
                              <option>-----Select Period-----</option>
                              <?php
                              include "db.php";
                              $query2 = mysqli_query($con,"select * from puc_plan_master") or die(mysqli_error($con));
                              while ($fetch2=mysqli_fetch_array($query2)) 
                              {
                                extract($fetch2);
                              ?>
                              <option value="<?php echo $fetch2['puc_plan_id'];?>"><?php echo $fetch2['puc_plan_period'];?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Vehicle Model</label>
                          <div class="col-sm-9">
                            <input type="text" id="" class="form-control" name="puc_vehicle_model"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Amount</label>
                          <div class="col-sm-9">
                              <select class="form-control form-control-lg" name="puc_plan_amount" id="r_id">                             
                              <option value="0">Amount</option>                             
                            </select>
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
   <script type="text/javascript">
        $(document).ready(function(){
          $("select#puc_plan_id").change(function(){
                var c = $("#puc_plan_id option:selected").val();
           alert-(c);
                $.ajax({
                    type: "POST",
                    url: "puc_plan.php", 
                    data: { puc_plan_period : c  } 
                }).done(function(data){
                    $("#r_id").html(data);
                });
            });
        });
      </script>
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
$query="INSERT INTO `puc_user`(`user_id`, `puc_vehicle_no`, `puc_fuel_type`, `puc_vehicle_type`, `puc_vehicle_class`,`p_plan_period`, `p_plan_amount`,`puc_status`)VALUES($user_id,'$puc_vehicle_no','$puc_fuel_type','$puc_vehicle_type','$puc_vehicle_model','$puc_plan_period','$puc_plan_amount','Pending')";
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