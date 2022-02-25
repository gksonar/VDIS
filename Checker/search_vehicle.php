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
<style type="text/css">
    .sticky_search
    {
        position: -webkit-sticky;
        position: sticky;
        top: 10%;
        z-index: 999;
        border-radius: 20px;
        font-size: 1rem;
    }        
            /* Center the loader */
            #loader {
              position: absolute;
              left: 50%;
              top: 50%;
              z-index: 1;
              width: 150px;
              height: 150px;
              margin: -75px 0 0 -75px;
              border: 16px solid #f3f3f3;
              border-radius: 50%;
              border-top: 16px solid #3498db;
              width: 120px;
              height: 120px;
              -webkit-animation: spin 2s linear infinite;
              animation: spin 2s linear infinite;
            }

            @-webkit-keyframes spin {
              0% { -webkit-transform: rotate(0deg); }
              100% { -webkit-transform: rotate(360deg); }
            }

            @keyframes spin {
              0% { transform: rotate(0deg); }
              100% { transform: rotate(360deg); }
            }

            /* Add animation to "page content" */
            .animate-bottom {
              position: relative;
              -webkit-animation-name: animatebottom;
              -webkit-animation-duration: 1s;
              animation-name: animatebottom;
              animation-duration: 1s
            }

            @-webkit-keyframes animatebottom {
              from { bottom:-100px; opacity:0 } 
              to { bottom:0px; opacity:1 }
            }

            @keyframes animatebottom { 
              from{ bottom:-100px; opacity:0 } 
              to{ bottom:0; opacity:1 }
            }
            
    
           
  
  </style>
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
              Search Vehicle
            </h3>
          </div>
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Search Vehicle</h4>
                <input type="text" id="search_cust" class="form-control form-control-lg search my-3 sticky_search " style="" placeholder="Search">
                 
            
            <div class="col-md-12 grid-margin stretch-card ">
              <div class="card" style="    margin: 0% 0%;">
                <div class="card-body">
                  
                     <div class="card-body p-0">
                         <table class="table mb-0">
                             <thead>
                                 <tr>
                                     <th class="all font-weight-medium">RC no</th>
                                     <th class="min-tablet font-weight-medium">Information</th>
                                     <th class=" font-weight-medium " >RC</th>
                                     <th class="all font-weight-medium">PUC</th>
                                     <th class="min-tablet font-weight-medium">Licence</th>
                                     <th class=" font-weight-medium " >User</th>
                                      <th class=" font-weight-medium " >Fine</th>
                                 </tr>
                             </thead>
                             <tbody id="pagedata">

                             <?php
                              require 'db.php';
                              $select = "SELECT rc_user.*,user_register.* FROM rc_user INNER JOIN user_register ON rc_user.user_id = user_register.user_id  limit 10 ";
                               mysqli_query($con,"SET CHARACTER SET 'utf8'");
                                mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
                                                           //echo $select;
                              $i=1;
                               if ($result = $con->query($select))
                                  {
                                        while ($data = $result->fetch_assoc())
                                        {
                                           echo'
                                 <tr class="well"  id="'.$data["user_id"].'">
                                     <td>'.$data["r_id"].'</td>
                                     <td>
                                         <div class="media">
                                            
                                             <div class="media-body">
                                                 <p class="mb-0">'.$data["rc_vehicle_no"].'</p>
                                                 <p class=" small">'.$data["user_name"].'&nbsp - '.$data["rc_myon"].'-'.$data["rc_body_color"].'</p>
                                             </div>
                                         </div>
                                     </td>
                                     <td>                                   
                                      <a href="javascript:;" class="view" data-toggle="modal" data-userid="'.$data["user_id"].'" data-target="#addmoney"><span class="btn-primary btn btn-sm btn-30 rounded"" style="" >RC</span></a>    
                                      </td>
                                      <td> 
                                      <a href="javascript:;" class="puc" data-toggle="modal" data-userid="'.$data["user_id"].'" data-target="#addmoney"><span class="btn-primary btn btn-sm btn-30 rounded"" style="" >PUC</span></a>    
                                     </td>
                                     <td> 
                                       <a href="javascript:;" class="license" data-toggle="modal" data-userid="'.$data["user_id"].'" data-target="#addmoney"><span class="btn-primary btn btn-sm btn-30 rounded"" style="" >License</span></a>            
                                  
                                 
                                  <td> 
                                   <a href="javascript:;" class="user" data-toggle="modal" data-userid="'.$data["user_id"].'" data-target="#addmoney"><span class="btn-primary btn btn-sm btn-30 rounded"" style="" >User</span></a>
                                  </td>
                                  <td> 
                                  <a href="fine_new.php?user_id='.$data["user_id"].'"> <span class="material-icons btn-success btn btn-sm btn-30 rounded">Fine</span></a>
                                  </td>
                                  
                                  
                                 </tr>
                             '; 
                         }
                     }
                     ?>
                     </tbody>
                  </table>
                         
                     </div>
                     <div class="row loadmore_div">
                          <div class="col-12 text-center" style="    margin-bottom: 5%;">
                              <button type="button" class="loadmore btn btn-primary">Load More</button>
                          </div>
                      </div>
                 </div>
            <div class="modal fade " id="addmoney" tabindex="-1" role="dialog" aria-labelledby="addmoenylabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          Information
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body" id="modal_data">                      
                        
                 
                        </div>             
                        <div class="modal-footer">
                          
                          <button type="button" class="btn btn-light" data-dismiss="modal">Home</button>
                        </div>
                      </div>
                    </div>
                  </div>

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
 <script>
         $("#search_cust").on("keyup",function () 
         
        {
            
            var search_text = $("#search_cust").val();
            if(search_text == ''){
             window.location.href="search_vehicle.php";
            }
            else
            {
             $.ajax({
                      url: 'search_cust.php',
                      type: "post",
                      data:{search_text:search_text},
                      beforeSend: function (){
                          //$('#loader').css("display","block");

                      },
                      success: function (data) {
                          //$('#loader').css("display","none");
                           $('.loadmore_div').css("display","none");
                               $("#pagedata").html(data);
                      }
                 });
            }
            

         });


        $(".loadmore").click(function() {

         

             var lastId = $(".well:last").attr("id");

             $.ajax({

                         url: 'get_cust.php?lastId=' + lastId,

                         type: "get",

                         beforeSend: function (){

                             $('#loader').css("display","block");
                             
                         },

                         success: function (data) {
                             $('#loader').css("display","none");
                             
                                  $("#pagedata").append(data);

                         }

             });

        

         });
       </script>
    <script type="">
        $(".view").click(function () {
               var user_id = $(this).data('userid');
               
                $.ajax({
                  type: "POST",
                  data : {"user_id":user_id},
                  url : "rc_details.php",
                  success : function (data) {
                    console.log(data);
                    $("#modal_data").html(data);
                  }
                })
               
             }) 
       $(".puc").click(function () {
               var user_id = $(this).data('userid');
               
                $.ajax({
                  type: "POST",
                  data : {"user_id":user_id},
                  url : "puc_details.php",
                  success : function (data) {
                    console.log(data);
                    $("#modal_data").html(data);
                  }
                })
               
             }) 
        
         $(".user").click(function () {
               var user_id = $(this).data('userid');
               
                $.ajax({
                  type: "POST",
                  data : {"user_id":user_id},
                  url : "user_details.php",
                  success : function (data) {
                    console.log(data);
                    $("#modal_data").html(data);
                  }
                })
               
             }) 
        
         $(".license").click(function () {
               var user_id = $(this).data('userid');
               
                $.ajax({
                  type: "POST",
                  data : {"user_id":user_id},
                  url : "license_details.php",
                  success : function (data) {
                    console.log(data);
                    $("#modal_data").html(data);
                  }
                })
               
             }) 
        
         $(".insurance").click(function () {
               var user_id = $(this).data('userid');
               
                $.ajax({
                  type: "POST",
                  data : {"user_id":user_id},
                  url : "user_details.php",
                  success : function (data) {
                    console.log(data);
                    $("#modal_data").html(data);
                  }
                })
               
             }) 
        
 
    </script>
       

</body>


</html>
