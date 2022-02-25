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
              Requested PUC
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">PUC</a></li>
                <li class="breadcrumb-item active" aria-current="page">Requested PUC</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Requested PUC</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            
                            <th>Sr.No</th>
                            <th>Vehicle No  : </th>
                           
                            <th>Status</th>
                            
                          
                        </tr>
                      </thead>



                      <?php
                            require 'db.php';
                              $select = "SELECT puc_user.*,user_register.* FROM puc_user INNER JOIN user_register ON puc_user.user_id = user_register.user_id ";
                            mysqli_query($con,"SET CHARACTER SET 'utf8'");
                            mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
                                                          //echo $select;
                             $i=1;
                              if ($result = $con->query($select))
                                 {
                                       while ($data = $result->fetch_assoc())
                                       {
                                          echo'
                      <tbody>
                      <input type="hidden"  name="p_id" value='.$data["p_id"].'>
                        <tr>
                          <td class="py-1" p_id="'.$data["p_id"].'">
                            '.$data["p_id"].'
                          </td>
                          <td>
                            '.$data["puc_vehicle_no"].'
                          </td>';
                      if($data["puc_status"] == "Pending")
                      {
                        echo '
                          <td>
                            <label class="badge badge-info" style="background-color:gray;">Pending</label>
                          </td>
                         ';
                      }
                      elseif($data["puc_status"] == "Accepted")   
                      {
                        echo '
                          <td>
                            <label class="badge badge-info" style="background-color:#21b321;">Approve</label>
                          </td>
                          ';
                      }    
                      elseif($data["puc_status"] == "Rejected")   
                      {
                        echo '
                          <td>
                            <label class="badge badge-info" style="background-color:red;">Disapprove</label>
                          </td>
                          ';
                      }    
                      elseif($data["puc_status"] == "Paid")   
                      {
                        echo '
                          <td>
                            <label class="badge badge-primary badge-info" >Paid</label>
                          </td>
                          ';
                      } 
                      echo'   <td>
                            <a href="view_user_puc.php?p_id='.$data["p_id"].'"><button class="btn btn-outline-primary" >View</button></a>
                          </td>             
                        
                        </tr>
                        
                      </tbody>';
                    }}?>
                    </table>
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
