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
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
 	<!-- Main Header-->
<?php include "header.php";?>
    <!-- End Main Header -->

	
	<!--Page Title-->
    <section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(images/background/pattern-14.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-15.png)"></div>
    	<div class="auto-container">
			<h2>Feedback</h2>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li>Feedback</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Contact Page Section -->
    <section class="contact-page-section">
		<div class="auto-container" style="margin-top: 5%">
			<div class="row clearfix" >
				
				<!-- Form Form -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">GET IN TOUCH</div>
							<h2>Ready to Get Started?</h2>
						</div>
						
						<!-- Default Form -->
						<div class="default-form contact-form">
							<form method="post" action="" id="contact-form">
                                <div class="form-group">
                                    <input type="text" name="username" value="" placeholder="Name" required>
                                </div>
                                    							
								
								<div class="form-group">
									<input type="text" name="subject" value="" placeholder="Subject" required>
								</div>
								
								<div class="form-group">
									<textarea name="message" placeholder="Message"></textarea>
								</div>
								
								<div class="form-group">
									<button type="submit" name="submit" class="theme-btn btn-style-four"><span class="txt">Send Feedback</span></button>
								</div>
                                
                            </form>
                        </div>
						
					</div>
				</div>
				
				<!-- Info Column -->
				
				
			</div>
		</div>
	</section>
	<!-- End Contact Page Section -->
	

	<!-- Newsletter Section -->

	<!-- End Newsletter Section -->
	
	<!-- Main Footer -->
  <?php include "footer.php";?>
	<!-- End Main Footer -->
	
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
 if(isset($_POST['submit']))
 {

extract($_POST);
$query="INSERT INTO `feedback_table`(`user_name`, `subject`, `message`) VALUES ('$username','$subject','$message')";
$asd = mysqli_query($con,$query)or die(mysqli_error($con));


            if($asd)
            {
              echo '<script type="text/javascript">';
              echo " alert('Feedback Sent Successfully ');";
              echo 'window.location.href = "index.php";';
              echo '</script>';
            }  
            else
            { 
              echo '<script type="text/javascript">';
              echo " alert('Sorry... Cant Sent');";
              echo 'window.location.href = "feedback.php";';
              echo '</script>';
            }
  

            
        

}
?>



