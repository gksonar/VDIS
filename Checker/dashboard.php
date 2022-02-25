<?php

session_start();
include'db.php';
if(!(isset($_SESSION['c_email'])))
{
echo "<script>";
echo 'window.location.href="index.php";';
echo "</script>";
}
 ?>

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
          <div class="page-header text-center">
            <h3 class="page-title " style="margin-bottom: -3%">
              Vehicle Document Identification System (Checker Side)
            </h3>
          </div>
          <div class="row grid-margin">
                  


            
          </div>
          <h3 class="page-title">
            Dashboard
          </h3>
          <div class="row" style="margin-top: 2%">

            <div class="col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                <h4 class="card-title mb-0">User</h4>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block pt-3">
                    <div class="d-md-flex">
                       <?php 
                        $count = 1;
                        $asd = mysqli_query($con,"select * from user_register") or die (mysqli_error($con));
                        $Total = mysqli_num_rows($asd);
                        ?>
                    <h2 class="mb-0"><?php echo $Total; ?></h2>
                      <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                      </div>
                    </div>
                    <small class="text-gray"></small>
                    </div>
                  <div class="d-inline-block">
                  <i class="fas fa-users text-info icon-lg"></i>                                    
                  </div>
                  </div>
                </div>
              </div>
            </div>





           
            <div class="col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                <h4 class="card-title mb-0">Fine</h4>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block pt-3">
                    <div class="d-md-flex">
                       <?php 
                        $count = 1;
                        $asd = mysqli_query($con,"select * from fine_user") or die (mysqli_error($con));
                        $Total = mysqli_num_rows($asd);
                        ?>
                    <h2 class="mb-0"><?php echo $Total; ?></h2>
                      <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                      </div>
                    </div>
                    <small class="text-gray"></small>
                    </div>
                  <div class="d-inline-block">
                  <i class="fas fa-user text-info icon-lg"></i>                                    
                  </div>
                  </div>
                </div>
              </div>
            </div>

          
          </div>
            <h3 class="page-title">
              Documents
            </h3>
            <div class="row" style="margin-top: 2%">

            <div class="col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                <h4 class="card-title mb-0">RC</h4>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block pt-3">
                    <div class="d-md-flex">
                       <?php 
                        $count = 1;
                        $asd = mysqli_query($con,"select * from rc_user") or die (mysqli_error($con));
                        $Total = mysqli_num_rows($asd);
                        ?>
                    <h2 class="mb-0"><?php echo $Total; ?></h2>
                      <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                      </div>
                    </div>
                    <small class="text-gray"></small>
                    </div>
                  <div class="d-inline-block">
                  <i class="fas fa-copy text-info icon-lg"></i>                                    
                  </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                <h4 class="card-title mb-0">PUC</h4>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block pt-3">
                    <div class="d-md-flex">
                       <?php 
                        $count = 1;
                        $asd = mysqli_query($con,"select * from puc_user") or die (mysqli_error($con));
                        $Total = mysqli_num_rows($asd);
                        ?>
                    <h2 class="mb-0"><?php echo $Total; ?></h2>
                      <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                      </div>
                    </div>
                    <small class="text-gray"></small>
                    </div>
                  <div class="d-inline-block">
                  <i class="fas fa-file  text-info icon-lg"></i>                                    
                  </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                <h4 class="card-title mb-0">License</h4>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block pt-3">
                    <div class="d-md-flex">
                       <?php 
                        $count = 1;
                        $asd = mysqli_query($con,"select * from user_licence") or die (mysqli_error($con));
                        $Total = mysqli_num_rows($asd);
                        ?>
                    <h2 class="mb-0"><?php echo $Total; ?></h2>
                      <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                      </div>
                    </div>
                    <small class="text-gray"></small>
                    </div>
                  <div class="d-inline-block">
                  <i class="fas far fa-address-card text-info icon-lg"></i>                                    
                  </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                <h4 class="card-title mb-0">Insurance</h4>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block pt-3">
                    <div class="d-md-flex">
                       <?php 
                        $count = 1;
                        $asd = mysqli_query($con,"select * from checker_info") or die (mysqli_error($con));
                        $Total = mysqli_num_rows($asd);
                        ?>
                    <h2 class="mb-0"><?php echo $Total; ?></h2>
                      <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                      </div>
                    </div>
                    <small class="text-gray"></small>
                    </div>
                  <div class="d-inline-block">
                  <i class="fas fa-paste text-info icon-lg"></i>                                    
                  </div>
                  </div>
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
