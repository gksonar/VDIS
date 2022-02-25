
<?php
   //include("db.php");
  session_start();
?>   

<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/meto/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 19:27:15 GMT -->
<head>
<meta charset="utf-8">
<title>Vehicle Document Identification System</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="css/color-switcher-design.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon-1.gif" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
	 <div class="preloader"></div>
 	
 	<!-- Main Header-->
  <?php include "header.php";?>
    <!-- End Main Header -->
    <section class="contact-page-section" style="margin-bottom: -8%;">
		<div class="auto-container">
			<div class="clearfix">
				
				<!-- Form Form -->
				<div class="form-column col-lg-12 col-md-12 col-sm-12" style="margin: 4% 25%;max-width: 50%;margin-bottom: 25%">
					<div class="inner-column">
						<div style="">
							<a href="index.php"><span class="flaticon-multiply" style="margin-left: 96%; font-size: 20px; font-weight: 600;color: black;"></span></a>
						</div>
						
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">Ready to Get Sign In</div>
							<h2>Login</h2>
						</div>
						
						<!-- Default Form -->
						<div class="default-form contact-form">
							<form method="post" action="" id="contact-form">
                                <div class="form-group">
                                    <input type="text" name="username" value="" placeholder="Username" >
                                </div>                              
                                
								<div class="form-group">
									<input type="text" name="password" value="" placeholder="Password"  >
								</div>
							
															
								<div class="form-group">
									<div class="row" style="float: right">										
									<a href="user_registration.php"><input type="button"  style=" margin-left: -15%;" value="Register" class="theme-btn btn-style-three"><span class="txt"></span>										
									</a>
									<input type="submit" name="login" value="Login"  class="theme-btn btn-style-three"><span class="txt"></span>

									
									
									</div>
									
								</div>
                                
                            </form>
                        </div>
						
					</div>
				</div>
				
				<!-- Info Column -->
				
				
			</div>
		</div>
	</section>
	<?php include 'footer.php';?>	
</div>

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>

<!-- Mirrored from expert-themes.com/html/meto/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 19:27:16 GMT -->
</html>


<?php
    include'db.php';

if(isset($_POST['login']))
{

 echo $query="select * from user_register where user_email='".$_POST['username']."' and user_password='".$_POST['password']."'";

 $res=mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($res)>0)
      {
             $row=mysqli_fetch_array($res);
            extract($row);

            $_SESSION['user_id']=$row['user_id'];
         $_SESSION['user_email']=$row['user_email'];
         
                  echo "<script>";
                 echo "alert('Login Successfully');";
                   echo "window.location.href='user_profile.php';";
                   echo "</script>";
        
        
      }
     else
     {
          echo "<script>";
          echo "alert('Email  or Password is Invalid');";
          //echo "window.location.href='index.php';";
          echo "</script>";
    }
}
?>