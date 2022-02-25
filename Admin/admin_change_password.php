  <?php
   //include("db.php");
  session_start();
?>   




<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              
              <h4>Admin Login</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" id="exampleInputEmail1" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="newpassword" id="exampleInputPassword1" placeholder="New Password">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="renterpassword" id="exampleInputEmail1" placeholder="Renter Password">
                </div>
                <div class="mt-3">
                  <input type="submit" name="Login" value="Update Password" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href=""></div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  
                
                </div>
                
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
</html>




<?php
                                                        
if(isset($_POST['submit']))
{
    
    $query = 'select * from admin where password="'.$_POST['password'].'"';

$res=mysqli_query($con,$query);

if(mysqli_num_rows($res)>0)
{

if(strlen($_POST['newpassword']) >= 5 )
    {
        if($_POST['newpassword']==$_POST['renterpassword'])
        {
        $query1='update admin set password="'.$_POST['newpassword'].'" where username ="admin@a.a"';    
        $res=mysqli_query($con,$query1);

          echo '<script type="text/javascript">'; 
          echo 'alert("Password changed Successfully !!!! ");'; 
          echo 'window.location.href = "user_profile.php";'; 
          echo '</script>';
        }
        else
        {
        echo '<script type="text/javascript">';
        echo 'alert(" password is not matched...  try again !!!! ");'; 
        echo 'window.location.href = "chang_password.php";'; 
        echo '</script>';
        }
    }
else 
{
    echo '<script type="text/javascript">';
    echo 'alert(" password is greater than 6");'; 
    echo 'window.location.href = "change_password.php";'; 
    echo '</script>';
}
}
else
{
    echo '<script type="text/javascript">';
    echo 'alert("Old password is not matched...  try again");';
    echo '</script>';
            

}
}
?>

