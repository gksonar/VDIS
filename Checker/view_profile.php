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
             <h3 class="" style="margin-left: 0%;"  >
                Checker
             </h3>
           
           </div>
           <div class="row">
             <div class="col-12" >
               <div class="card">
                 <div class="card-body">
                   <div class="container ">
                      <div class="row">
                     <div class="col-9">
                       <h4 class="card-title">View Checker</h4>
                     </div>
                     <div class="col-3">
                       
                      <a href="user_profile.php" style="float:right;"><i class="fa fa-window-close">   Close</i></a>
                     </div>
                   </div>
                   <form class="form-sample" id="" method="POST" action="">
                     <p class="card-description">
                       Checker info
                     </p>
                     <?php
                    require 'db.php';
                    extract($_GET);                              
                    $select = "SELECT * FROM checker_info where c_id='".$_SESSION['c_id']."'";
                     if ($result = $con->query($select))
                     {
                       while ($data = $result->fetch_assoc())
                       { 
                     
                       echo'
                     <div class="row pricing-table">
                       <div class="col-md-9 grid-margin stretch-card pricing-card" style="margin: 5% 15%;">
                         <div class="card border-primary border pricing-card-body">
                           <div class="text-center pricing-card-head">                        
                             
                            
                           </div>
                            <input type="hidden"  name="c_id" value='.$data["c_id"].'>
                       <div class="py-4">
                         <p class="clearfix">
                           <span class="float-left">
                            Checker Number
                           </span>
                           <span class="float-right text-muted" ">
                             '.$data["c_id"].'
                           </span>
                         </p>
                         <p class="clearfix">
                           <span class="float-left">
                             First Name : 
                           </span>
                           <span class="float-right text-muted">
                             '.$data["c_fname"].'
                           </span>
                         </p>
                         <p class="clearfix">
                           <span class="float-left">
                            Last Name :
                           </span> 
                           <span class="float-right text-muted">
                            '.$data["c_lname"].'
                           </span>
                         </p>
                         <p class="clearfix">
                           <span class="float-left">
                            Email :
                           </span>
                           <span class="float-right text-muted">
                             '.$data["c_email"].'
                           </span>
                         </p>                        
                         <p class="clearfix">
                           <span class="float-left">
                             Password :
                           </span>
                           <span class="float-right text-muted">
                             '.$data["c_password"].'
                           </span>
                         </p>
                         <p class="clearfix">
                           <span class="float-left">
                             Gender
                           </span>
                           <span class="float-right text-muted">
                              '.$data["c_gender"].'
                           </span>
                         </p>

                         <p class="clearfix">
                           <span class="float-left">
                             Address
                           </span>
                           <span class="float-right text-muted">
                              '.$data["c_address"].'
                           </span>
                         </p>


                         <p class="clearfix">
                           <span class="float-left">
                             Cap no
                           </span>
                           <span class="float-right text-muted">
                              '.$data["c_cap"].'
                           </span>
                         </p>

                          <p class="clearfix">
                           <span class="float-left">
                             Designation
                           </span>
                           <span class="float-right text-muted">
                              '.$data["c_desg"].'
                           </span>
                         </p>

                          <p class="clearfix">
                           <span class="float-left">
                             Current Posting
                           </span>
                           <span class="float-right text-muted">
                              '.$data["c_current"].'
                           </span>
                         </p>

                          <p class="clearfix">
                           <span class="float-left">
                             City
                           </span>
                           <span class="float-right text-muted">
                              '.$data["c_city"].'
                           </span>
                         </p>




                         <p class="clearfix">
                           <span class="float-left">
                             DOB
                           </span>
                           <span class="float-right text-muted">
                             '.$data["c_dob"].'
                           </span>
                         </p>

                         <p class="clearfix">
                           <span class="float-left">
                             DOJ :
                           </span>
                           <span class="float-right text-muted">
                           '.$data["c_doj"].'
                           </span>
                         </p>
                         
                       </div>
                                                  
                         </div>
                       </div>                     
                         
                     </div>'; } } ?>
                   </div>
                 </div>
               </div>
             </div>
             
           </div>
         </div>
         <!-- content-wrapper ends -->
         <!-- partial:admin/partials/_footer.html -->
       
         <!-- partial -->
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
