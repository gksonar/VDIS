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
              Checker List 
            </h3>
          </div>
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Checker Information</h4>
               
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                         
                          <th>
                            Fine Name
                          </th>
                          <th>
                           Fine Charge
                          </th>
                        
                          <th>
                            Action
                          </th>


                        </tr>
                      </thead>



                      <?php 
                      include "db.php";
                      $asd = mysqli_query($con,"select * from fine_user") or die (mysqli_error($con));
                      $Total = mysqli_num_rows($asd);
                      ?>
                      <?php while($fetch=mysqli_fetch_array($asd)){
                      extract($fetch)

                      ?>
                      <tbody>
                        <tr>
                         <input type="hidden" name="fine_id" value=" <?php echo $fine_id; ?>">
                          <td>
                            <?php echo $fine_name; ?>
                          </td>
                          <td>
                            <?php echo $fine_charge; ?>
                          </td>
                           
                          <td style="padding: 10px;font-size: 16px;">
                            <a href="edit_fine.php?fine_id=<?php echo $fine_id;?>"><i class="fas fa-pencil-alt " style="color: green" ></i>
                            
                            <a href="javascript:;" class="del" data-userid = '<?php echo $fine_id; ?>'><i class="fa fa-trash" style="margin-left:10%;color: red"></i></a>
                          </td> 
                        </tr>
                         <?php } ?>
                       
                      </tbody>
                    </table>
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
  <script type="">
      $(".del").click(function () {
          var fine_id = $(this).data('userid');
          var c = confirm("Do u want to delete Fine");
          if(c)
          {
           $.ajax({
             type: "POST",
             data : {"fine_id":fine_id},
             url : "delete_fine.php",
             success : function (data) {
               if(data == "1")
               {
                 alert("Fine Deleted !");
                 window.location.reload();
               }
             }
           })
          }
        }) 
  
  </script>
 
</body>


</html>
