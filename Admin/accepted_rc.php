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
              Accepted RC
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">RC</a></li>
                <li class="breadcrumb-item active" aria-current="page">Accepted RC</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Aceepted RC</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>                                                    
                            <th>
                              id
                              </th>
                             <th>
                              vehicle_no
                            </th>
                            <th>
                              Name</th>
                            <th>
                              Engine no </th>
                               <th>
                              Chasis no </th>
                            <th>
                              Vehicle Class</th>
                            <th>
                              Vehicle Type</th>
                            
                            
                            <th>
                              Fuel </th>
                            <th>
                              Body Colour  
                              </th>
                               <th>
                             Seat Capacity  
                              </th>
                              <th>
                              Issue Date </th>
                              <th>
                              Expiry Date </th>

                                                    
                        </tr>
                      </thead>



                      <?php
                            require 'db.php';
                            $select = "SELECT rc_user.*,user_register.* FROM rc_user INNER JOIN user_register ON rc_user.user_id = user_register.user_id where rc_status='Accepted'";
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
                      <input type="hidden"  name="id" value='.$data["r_id"].'>
                        <tr>
                          <td class="py-1" id="'.$data["r_id"].'"> 
                            '.$data["r_id"].'
                          </td>
                          <td>
                            '.$data["rc_vehicle_no"].'
                          </td>
                          <td>
                            '.$data["user_name"].'
                          </td>
                      
                        
                          <td>
                            '.$data["rc_engine_no"].'
                          </td>

                           <td>
                            '.$data["rc_chasis_no"].'
                          </td>
                          <td>
                            '.$data["rc_vehicle_class"].'
                          </td>
                          <td>
                            '.$data["rc_vehicle_type"].'
                          </td>
                        
                          <td>
                            '.$data["rc_fuel"].'
                          </td>
                       
                          <td>
                            '.$data["rc_body_color"].'
                          </td>
                          <td>
                            '.$data["rc_seat_cap"].'
                          </td>
                          <td>
                            '.$data["rc_issue_date"].'
                          </td>
                          <td>
                            '.$data["rc_valid_upto"].'
                          </td>
                          </tr>
                          ';                      
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




