<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/forms/advanced_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:07:34 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="admin/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="admin/images/favicon.png" />
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
                Upload License
            </h3>
          
          </div>
          <div class="row">
           
            <div class="col-12 grid-margin" style="margin-left: 20%;    max-width: 60%;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Upload License</h4>
                  <form class="form-sample" method="post" enctype="multipart/form-data"> 
                    <p class="card-description">
                     License info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Licence No</label>
                          <div class="col-sm-9">
                            <input type="text" id="vehicle_no_plate" name="license_no" class="form-control" />
                          </div>
                        </div>
                      </div> 

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">RTO Location</label>
                          <div class="col-sm-9">
                            <input type="text" id="" class="form-control" name="license_rto_location"/>
                          </div>
                        </div>
                      </div>                    
                    </div>
               
                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Issue Date</label>
                          <div class="col-sm-9">
                            <input type="Date" id="" class="form-control" name="license_issue_date"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Expiry Date</label>
                          <div class="col-sm-9">
                            <input type="Date" id="" class="form-control" name="license_expiry_date"/>
                          </div>
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
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> <a href="https://www.urbanui.com/" target="_blank"></a></span>
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
  <script type="text/javascript"> //for image1
        $(document).ready(function(){
          //Image file input change event
          $("#image").change(function(){
            readImageData(this);//Call image read and render function
          });
        });
        function readImageData(imgData){
          if (imgData.files && imgData.files[0]) {
            var readerObj = new FileReader();
            
            readerObj.onload = function (element) {
              $('#preview_img').attr('src', element.target.result);
            }
            readerObj.readAsDataURL(imgData.files[0]);
          }
        }
      </script> 

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
    $("#vehicle_no_plate").inputmask( {"mask": "A{2} 9{1,15}"});
  </script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/forms/basic_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:07:34 GMT -->
</html>
<?php

include'db.php';
 if(isset($_POST['submit']))
 {

extract($_POST);
  $user_id=$_SESSION['user_id'];
  
   
  

            // $asd = mysqli_query($con,$query)or die(mysqli_error($con));
            // $query="INSERT INTO `user_licence`(`l_no`, `user_id`, `l_rto_location`, `l_issue_date`, `l_expiry_date`) VALUES ('$license_no','$user_id','$license_rto_location','$license_issue_date','$license_expiry_date')";
             echo $asd = mysqli_query($con,"INSERT INTO `user_licence`(`l_no`, `user_id`, `l_rto_location`, `l_issue_date`, `l_expiry_date`) VALUES ('$license_no','$user_id','$license_rto_location','$license_issue_date','$license_expiry_date')") or die(mysql_error());


            if($asd)
            {
              echo '<script type="text/javascript">';
              echo " alert('Licence Added Successfully ');";
              echo 'window.location.href = "user_profile.php";';
              echo '</script>';
            }  
            else
            { 
              echo '<script type="text/javascript">';
              echo " alert('Sorry... Cant Added');";
              echo 'window.location.href = "user_profile.php";';
              echo '</script>';
            }
        

}
?>



