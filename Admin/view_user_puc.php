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
              User List 
            </h3>
          </div>
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">User Information</h4>
               
                 
            
            <div class="col-md-6 grid-margin stretch-card ">
              <div class="card" style="    margin: 0% 52%;">
                <div class="card-body">
                  <h4 class="card-title">Polution Control Certificate Application</h4>
                  <p class="card-description">
                    User PUC Information
                  </p>
                       <?php
                              require 'db.php';
                              extract($_GET);
                                $select = "SELECT puc_user.*,user_register.* FROM puc_user INNER JOIN user_register ON puc_user.user_id = user_register.user_id where puc_user. p_id='".$_GET['p_id']."'";
                              
                                             if ($result = $con->query($select))
                                                 {
                                                   while ($data = $result->fetch_assoc())
                                                  { 
                                                  
                                                    echo '
                  <form class="forms-sample" method="post" action="">
                   <input type="hidden"  name="p_id" value='.$data["p_id"].'>
                      <div class="py-4">
                        <p class="clearfix">
                          <span class="float-left">
                           PUC Number
                          </span>
                          <span class="float-right text-muted" ">
                            '.$data["p_id"].'
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            User Name : 
                          </span>
                          <span class="float-right text-muted">
                            '.$data["user_name"].'
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Vehicle Number :
                          </span>
                          <span class="float-right text-muted">
                           '.$data["puc_vehicle_no"].'
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                           Email :
                          </span>
                          <span class="float-right text-muted">
                            '.$data["user_email"].'
                          </span>
                        </p>                        
                        <p class="clearfix">
                          <span class="float-left">
                            Fuel :
                          </span>
                          <span class="float-right text-muted">
                           '.$data["puc_fuel_type"].'
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Vehicle Type
                          </span>
                          <span class="float-right text-muted">
                             '.$data["puc_vehicle_type"].'
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Vehicle Class :
                          </span>
                          <span class="float-right text-muted">
                            '.$data["puc_vehicle_class"].'
                          </span>
                        </p>
                      </div>';
                        if($data["puc_status"]=="Accepted" ||$data["puc_status"]=="Paid")
                      {
                          echo'<p class="clearfix">
                          <span class="float-left">
                           Status
                          </span>
                          <span class="float-right ">
                            Status Already  '.$data["puc_status"].'
                          </span>
                        </p>';
                      }
                      elseif($data["puc_status"]=="Pending")
                      {
                        echo'
                          <a href="approved_puc.php?p_id='.$data["p_id"].'"><label class="btn btn-primary mr-2">Approve</label></a>
                          <a href="disapproved_puc.php?p_id='.$data["p_id"].'"><label class="btn btn-danger mr-2" >Disapprove</label></a>';
                        }
                 echo'

                     
            </div>
            ';} } ?>
                  </form>
                </div>
              </div>
            </div>
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class="far fa-heart text-danger"></i></span>
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
if (isset($_POST['submit'])) 
{
  extract($_POST);
   echo $query="update puc_user set issue_date='".$issue_date."',valid_upto='".$valid_upto."'         where id='".$id."'";

           $asd=mysqli_query($con,$query) or die (mysqli_error($con));
  if($asd)
  {
  echo '<script type="text/javascript">';
  echo " alert('Date Allocated');";
  //echo 'window.location.href = "registered_user.php";';
  echo '</script>';
  }  
  else
  {
  echo '<script type="text/javascript">';
  echo " alert('Add again.');";
  //echo 'window.location.href = "sellration.php";';
  echo '</script>';
  }

}
?>


