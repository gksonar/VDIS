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
              Add Checker
            </h3>
          </div>
          <div class="row grid-margin">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Checker Information</h4>
                  <form class="form-sample" action="" method="POST">
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="c_fname" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="c_lname" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select name="c_gender" class="form-control">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input name="c_dob" class="form-control" placeholder="dd/mm/yyyy">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Type</label>
                          <div class="col-sm-9">
                            <select name="c_type" class="form-control">
                              <option>Select Category</option>
                              <option>Traffic Police</option>
                              <option>RTO</option>
                              <option>Home Guards</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <input type="text" name="c_address" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" name="c_email" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="password" name="c_password" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>

                    <p class="card-description">
                      Professional
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Joining</label>
                          <div class="col-sm-9">
                            <input name="c_doj" class="form-control" placeholder="dd/mm/yyyy">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Designation</label>
                          <div class="col-sm-9">
                            <input type="text" name="c_desg" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Cap Number</label>
                          <div class="col-sm-9">
                            <input type="text" name="c_cap" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Current Station</label>
                          <div class="col-sm-9">
                            <input type="text" name="c_current" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" name="c_city" class="form-control">
                          </div>
                        </div>
                      </div>
                     
                      <div class="col-md-6" >
                        <div class="form-group row" style="float: right">
                         
                          
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                         
                        </div>
                      </div>
                    </div>
                  </form>
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
  $query="INSERT INTO `checker_info`(`c_fname`, `c_lname`, `c_gender`, `c_dob`, `c_type`, `c_address`, `c_email`, `c_password`, `c_doj`, `c_desg`, `c_cap`, `c_current`, `c_city`) VALUES ('$c_fname', '$c_lname', '$c_gender', '$c_dob', '$c_type', '$c_address', '$c_email', '$c_password', '$c_doj', '$c_desg', '$c_cap', '$c_current', '$c_city')";

  echo $asd = mysqli_query($con,$query) or die(mysql_error());
  if($asd)
  {
  echo '<script type="text/javascript">';
  echo " alert('Checker Added Successfully');";
  echo 'window.location.href = "dashboard.php";';
  echo '</script>';
  }  
  else
  {
  echo '<script type="text/javascript">';
  echo " alert('Sorry...Cant Addded ');";
  echo 'window.location.href = "add_checker.php";';
  echo '</script>';
  }

}
?>

