<?php

session_start();
include'db.php';
if(!(isset($_SESSION['user_email'])))
{
echo "<script>";
echo 'window.location.href="index.php";';
echo "</script>";
}
 ?>

<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/meto/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 19:24:34 GMT -->
<head>
<meta charset="utf-8">
<title>Vehicle Identification System</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="css/color-switcher-design.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
   <!--  <div class="preloader"></div> -->
 	
 	<!-- Main Header-->
   <?php include "header-1.php";?>
    <!-- End Main Header -->

	
	<!-- Banner Section Two -->
    <section class="banner-section-two">
		<div class="pattern-layer-one" style="background-image: url(images/icons/pattern-1.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/icons/cross-icon.png)"></div>
		<div class="pattern-layer-three" style="background-image: url(images/background/pattern-5.png)"></div>
		<div class="pattern-layer-four" style="background-image: url(images/icons/banner-icon-1.png)"></div>
		<div class="pattern-layer-five" style="background-image: url(images/icons/icon-1.png)"></div>
		<div class="auto-container">
            
			<div class="row clearfix">
					
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1>Vehicle Identification System</h1>
						<div class="text">Automate the Identification Of Vehicle</div>
						
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="images/Banner.png" alt="" />
						</div>
					</div>
				</div>
			
			</div>
			
        </div>
        <!--Waves end-->
	</section>


	
	<section class="counter-section-two margin-top">
		<div class="auto-container">
			<div class="inner-container">
				<!-- Fact Counter -->
				<div class="fact-counter-two">
					<div class="row clearfix">

						<!-- Column -->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon-box">
										<span class="icon"><img src="images/icons/counter-1.png" alt="" /></span>
										<div class="circles-box">
											<span class="circle-one"></span>
											<span class="circle-two"></span>
										</div>
									</div>
									<a href="apply_rc_user.php"><h4 class="counter-title">RC Book</h4></a>
									
								</div>
							</div>
						</div>

						<!-- Column -->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon-box">
										<span class="icon"><img src="images/icons/counter-2.png" alt="" /></span>
										<div class="circles-box">
											<span class="circle-one"></span>
											<span class="circle-two"></span>
										</div>
									</div>
									<a href="apply_puc_user.php"><h4 class="counter-title">PUC Registration</h4></a>
								</div>
							</div>
						</div>

						<!-- Column -->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon-box">
										<span class="icon"><img src="images/icons/counter-3.png" alt="" /></span>
										<div class="circles-box">
											<span class="circle-one"></span>
											<span class="circle-two"></span>
										</div>
									</div>
									<a href="upload_license-1.php"><h4 class="counter-title">Licence</h4></a>
								</div>
							</div>
						</div>

						<!-- Column -->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon-box">
										<span class="icon"><img src="images/icons/counter-4.png" alt="" /></span>
										<div class="circles-box">
											<span class="circle-one"></span>
											<span class="circle-two"></span>
										</div>
									</div>
									<a href="fine_details.php"><h4 class="counter-title">Fine</h4></a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php include "footer.php";?>
	
</div>

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/wow.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>
<script src="js/color-settings.js"></script>

</body>

<!-- Mirrored from expert-themes.com/html/meto/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 19:25:23 GMT -->
</html>


<?php
   include("db.php");
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
      	echo " alert('Registered Successfully');";
		echo 'window.location.href = "user_profile.php";';         
         header("location:user_profile.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>