

<?php
   //include("db.php");
  session_start();
?>  
<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/meto/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 19:27:15 GMT -->
<head>
<meta charset="utf-8">
<title>Meto HTML-5 Template | Contact Us</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="css/color-switcher-design.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

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
	
    <section class="contact-page-section">
		<div class="auto-container">
			<div class="clearfix">
				
				<!-- Form Form -->
				<div class="form-column col-lg-12 col-md-12 col-sm-12" style="margin: 4% 25%;max-width: 50%;margin-bottom: 25%">
					<div class="inner-column">
						<div style="">
							<a href="index.php"><span class="flaticon-multiply" style="margin-left: 96%; font-size: 20px; font-weight: 600;
    color: black;"></span></a>
						</div>
						
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">Ready to Get Started?</div>
							<h2>Registration</h2>
						</div>
						
						<!-- Default Form -->
						<div class="default-form contact-form">
							<form method="post" action="" id="contact-form">
                                <div class="form-group">
                                    <input type="text" name="name" value="" placeholder="Name" required>
                                </div>

                                <div class="form-group">
									<input type="text" name="mob" value="" placeholder="Mobile Number" maxlength="11" required>
								</div>
                                    
								<div class="form-group">
									<input type="email" name="email" value="" placeholder="Email" required >
								</div>

								<div class="form-group">
									<input type="text" name="password" value="" placeholder="Password" required>
								</div>

								  <div class="form-group">
									<input type="text" name="license" value="" placeholder="Licence Number" maxlength="" required>
								</div>
                                    
								
								<div class="form-group">
									<input type="text" name="address" value="" placeholder="Address" required>
								</div>
								
															
								<div class="form-group">
									<div class="row" style="float: right">
										
									<button type="submit" class="theme-btn btn-style-three"><span class="txt">Register</span></button>

									
										
											
									<a href="index.php"><button type="submit" class="theme-btn btn-style-three" style="margin-left: 10%"><span class="txt">Cancel</span></button></a>
									
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
	<!-- End Contact Page Section -->
	
	<!-- Map Section -->

	<!-- End Map Section -->
	
	<!-- Newsletter Section -->
	
	<!-- End Newsletter Section -->
	
	<!-- Main Footer -->
    
	<!-- End Main Footer -->
	
</div>
<!--End pagewrapper-->

<!-- Color Palate / Color Switcher -->


<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
	<button class="close-search"><span class="flaticon-up-arrow-1"></span></button>
	<form method="post" action="https://expert-themes.com/html/meto/blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!--Scroll to top-->
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

   include("db.php");
   //session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
    {
	extract($_POST);
	echo $asd = mysqli_query($con,"INSERT INTO `user_register`(`user_name`, `user_mobile`, `user_email`, `user_password`,`user_license_no`, `user_address`) VALUES ('$name','$mob','$email','$password','$license','$address')") or die(mysql_error());
	if($asd)
	{
	echo '<script type="text/javascript">';
	echo " alert('Registered Successfully');";
	echo 'window.location.href = "user_login.php";';
	echo '</script>';
	}  
	else
	{
	echo '<script type="text/javascript">';
	echo " alert('Fill Again The Registration Form.');";
	echo 'window.location.href = "user_registration.php";';
	echo '</script>';
	}

}
?>

