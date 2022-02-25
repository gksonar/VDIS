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
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="dashboard.php"><img src="images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
        <ul class="navbar-nav">
        </ul>
        <ul class="navbar-nav navbar-nav-right">        
          
        
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face5.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="fas fa-cog text-primary"></i>
                Change Password
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="index.php">
                <i class="fas fa-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="fas fa-bars"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
     
     <?php include "sidebar.php" ?> 
     
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Update User
            </h3>
          </div>
          <div class="row grid-margin">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">User Information</h4>
                  <?php 
                    include "db.php";
                    $asd = mysqli_query($con,"select * from user_register where user_id='".$_GET['user_id']."'") or die (mysqli_error($con));
                    $Total = mysqli_num_rows($asd);
                    ?>
                    <?php while($fetch=mysqli_fetch_array($asd)){
                    extract($fetch)

                    ?>
                  <form class="form-sample" action="" method="POST">
                  <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Name</label>
                          <div class="col-sm-9">
                            <input type="text"  value="<?php echo $user_name;?>" name="user_name" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Mobile</label>
                          <div class="col-sm-9">
                            <input type="text"  value="<?php echo $user_mobile;?>" name="user_mobile" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                   
               
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text"  value="<?php echo $user_email;?>" name="user_email" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="text"  value="<?php echo $user_password;?>" name="user_password" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>

                
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <input  type="text" value="<?php echo $user_address;?>" name="user_address" class="form-control" placeholder="">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">License No</label>
                          <div class="col-sm-9">
                            <input type="text"  value="<?php echo $user_license_no;?>" name=" user_license_no" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                       <div class="col-md-6"  >
                      <div class="form-group row" style="">                       
                        
                          <button type="submit" name="submit" class="btn btn-primary mr-2">Update User</button>
                          <button class="btn btn-light">Cancel</button>
                       
                      </div>
                    </div>
                    </div>




                    
                  </form>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 . All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        
      </div>
      
    </div>
   
  </div>

  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  
  <script src="js/dashboard.js"></script>
 
</body>


</html>


<?php

   include("db.php");
   //session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
    {
  extract($_POST);
  $query="UPDATE `user_register` SET `user_name`='$user_name',
                                      `user_mobile`='$user_mobile',
                                      `user_email`='$user_email',
                                      `user_password`='$user_password',
                                      `user_license_no`='$user_license_no',
                                      `user_address`='$user_address' WHERE `user_id`='$user_id'";

  echo $asd = mysqli_query($con,$query) or die(mysql_error());
  if($asd)
  {
    echo '<script type="text/javascript">';
    echo " alert('User Updated Successfully');";
    echo 'window.location.href = "view_user.php"';
    echo '</script>';
  }  
  else
  {
    echo '<script type="text/javascript">';
    echo " alert('Sorry...Cant Updated ');";
    echo 'window.location.href = "view_user.php"';
    echo '</script>';
  }

}
?>
