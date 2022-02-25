

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
                Notification
            </h3>
          
          </div>
          <div class="row">
            <div class="col-12" style="margin-left: 20%;    max-width: 60%;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-envelope"></i>
                     <?php 
                        $count = 1;
                        $asd = mysqli_query($con,"select * from invoice_user where user_id='".$_GET["user_id"]."' and invoice_status='Pending'") or die (mysqli_error($con));
                        $Total = mysqli_num_rows($asd);
                        ?>
                    Inbox(<?php echo $Total; ?>)
                  </h4>
                  <?php ?>
                  <div class="table-responsive" >
                    <table class="table" >
                      <tbody>
                         <?php
                        require 'db.php';
                        extract($_GET); 
                        $i=0;                             
                        $select = "SELECT invoice_user.*,user_register.* FROM invoice_user INNER JOIN user_register ON invoice_user.user_id = user_register.user_id where invoice_user.user_id='".$_GET['user_id']."'";
                         if ($result = $con->query($select))
                         {
                           while ($data = $result->fetch_assoc())
                           { 
                            $i++;
                            if($data["invoice_status"]=="Paid")
                            {

                            }
                            elseif($data["invoice_status"]=="Pending")
                            {
                              echo'
                                    <tr>
                                      <td style="font-size:16px;">
                                       '.$i.' 
                                      </td>
                                      <td class="py-1">                            
                                      </td> 
                                      <td style="font-size:16px;">
                                        <label class="badge badge-light badge-pill" style="font-size: 100%;">'.$data["fine_grossamount"].'</label>
                                      </td>
                                                               
                                      <td style="font-size:16px;">
                                        Total Amount Need to Pay is '.$data["fine_grossamount"].' 
                                      </td>
                                      <td style="font-size:16px;">
                                        '.$data["generated_when"].' 
                                      </td>   

                                       <td style="font-size:16px;">
                                      <a href="pay_fine.php?invoice_id='.$data["invoice_id"].'"  class="badge badge-success badge-pill" style="font-size:16px;">Pay</a>
                                       </td>

                                    </tr>';
                            }
                           
                      }}?>
             
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:admin/partials/_footer.html -->
        <?php include "footer.php";?>
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
