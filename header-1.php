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

   <!-- Responsive -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

   <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
   <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
   </head>
    <header class="main-header header-style-two">
    	
		<!-- Header Top -->
        
		<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="inner-container clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="user_login.php"><img src="images/VDIS.gif" alt="" title=""></a></div>
                    </div>
                    
					<div class="nav-outer clearfix">
						<!--Mobile Navigation Toggler-->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<!-- Toggle Button -->    	
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							
							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class=" dropdown">
										<a href="user_profile.php">Hello <?php echo $_SESSION['user_email'];?></a>
										
									<li class="nav-item dropdown mr-lg-3">
                                    <a href="view_rc_user.php" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  >
                                        RC
                                    </a>
                                    <?php
                                    include "db.php";
                                         $i=1;
                                          $sql=mysqli_query($con,"select * from user_register where user_id='".$_SESSION['user_id']."'");
                                           $count = mysqli_num_rows($sql);
                                          while($res=mysqli_fetch_assoc($sql))
                                            {
                                            $user_id=$res['user_id'];
                                          ?>
                                    <ul class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
                                      
                                        <a class="dropdown-item nav-link" href="apply_rc_user.php?user_id=<?php echo"$user_id";?>" >Apply for New </a>
                                        <a class="dropdown-item nav-link" href="check_rc_status.php?user_id=<?php echo"$user_id";?>">Check Status</a>
                                        
                                         <a class="dropdown-item nav-link" href="view_rc_user.php?user_id=<?php echo"$user_id";?>" >View RC</a>
                                       </ul>
                                    
                                </li> 
                                <?php }?>

									<li class="nav-item dropdown mr-lg-3">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="" >
                                        PUC
                                    </a>
                      <?php
                                         $i=1;
                                          $sql=mysqli_query($con,"select * from user_register where user_id='".$_SESSION['user_id']."'");
                                           $count = mysqli_num_rows($sql);
                                          while($res=mysqli_fetch_assoc($sql))
                                            {
                                            $user_id=$res['user_id'];
                                          ?>

                                 	   <ul class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item nav-link" href="apply_puc_user.php?user_id=<?php echo"$user_id";?>" >Apply for New </a>
                                        <a class="dropdown-item nav-link" href="check_puc_status.php?user_id=<?php echo"$user_id";?>">Check Status</a>
                                         <a class="dropdown-item nav-link" href="puc_pay.php?user_id=<?php echo"$user_id";?>">Pay</a>
                                         <a class="dropdown-item nav-link" href="view_puc_user.php?user_id=<?php echo"$user_id";?>" >View PUC</a>
                                    </ul>
                    <?php }?>
                                </li> 





                  <li class="nav-item dropdown mr-lg-3">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="" >
                                        Licence
                                    </a>
                      <?php
                                         $i=1;
                                          $sql=mysqli_query($con,"select * from user_register where user_id='".$_SESSION['user_id']."'");
                                           $count = mysqli_num_rows($sql);
                                          while($res=mysqli_fetch_assoc($sql))
                                            {
                                            $user_id=$res['user_id'];
                                          ?>

                                     <ul class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item nav-link" href="upload_license-1.php?user_id=<?php echo"$user_id";?>" >Enter Details </a>

                                       
                                         <a class="dropdown-item nav-link" href="view_licence_user.php?user_id=<?php echo"$user_id";?>" >View </a>
                                    </ul>
                    <?php }?>
                                </li> 



  								<!-- 	           <li class="nav-item dropdown mr-lg-3">
                                      <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="" >
                                          Insurance
                                      </a>
                                      <div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item nav-link" href="apply_issurance.php" >Upload </a>
                                           <a class="dropdown-item nav-link" href="" >View Issurance</a>
                                      </div>
                                  </li> --> 


                               <!--  <li class="dropdown"><a href="#">Insurance</a>
                                  <ul>
                                    <li><a href="apply_issurance.php">Upload </a></li>
                                    <li><a href="faq.html">View Issurance</a></li>
                                 
                                  </ul>
                                </li> -->
<!-- 
                                <li class="nav-item dropdown mr-lg-3">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="" >
                                        License
                                    </a>
                                    <div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item nav-link" href="apply_issurance.php" >Upload </a>
                                         <a class="dropdown-item nav-link" href="" >View Issurance</a>
                                    </div>
                                </li>  -->


                                <?php
                                include "db.php";
                                     $i=1;
                                      $sql=mysqli_query($con,"select * from user_register where user_id='".$_SESSION['user_id']."'");
                                       $count = mysqli_num_rows($sql);
                                      while($res=mysqli_fetch_assoc($sql))
                                        {
                                        $user_id=$res['user_id'];
                                      ?>
									                   <li class="dropdown"><a href="fine_details.php?user_id=<?php echo"$user_id";?>">Fine Details</a>

                                      <ul class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item nav-link" href="fine_details.php?user_id=<?php echo"$user_id";?>">Fine Details</a>
                                       
                                    </ul>
										              <?php }?>
									</li>
									<li class="nav-item dropdown mr-lg-3">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="" >
                                        Settings
                                    </a>
                                    <ul class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item nav-link" href="user_logout.php" >Logout</a>
                                        <a class="dropdown-item nav-link" href="user_change_password.php?User_id=<?php echo"$user_id";?>" >Change Password</a> </ul>
                                </li> 								
									<li>
             <div class="outer-box clearfix" style="padding: 20px 0px;">
                        
                            <!-- Cart Box -->
                            <div class="cart-box" style="margin-bottom: 10%;"> 
                                <div class="dropdown">
                                    <button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i>
                                         <?php 
                                            $count = 1;
                                            $asd = mysqli_query($con,"select * from invoice_user where user_id='".$_SESSION["user_id"]."' and invoice_status='Pending'") or die (mysqli_error($con));
                                            $Total = mysqli_num_rows($asd);
                                            ?>
                                     
                                     


                                      <span class="total-cart"><?php echo $Total; ?></span></button>
                                      <?php ?>

                                    <div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu3">

                                       <?php
                                      require 'db.php';
                                      extract($_GET); 
                                      $i=0;                             
                                      $select = "SELECT invoice_user.*,user_register.* FROM invoice_user INNER JOIN user_register ON invoice_user.user_id = user_register.user_id where invoice_user.user_id='".$_SESSION['user_id']."'";
                                       if ($result = $con->query($select))
                                       {
                                         while ($data = $result->fetch_assoc())
                                         { 

                                          $i++;
                                         echo'';
                                         if ($data["invoice_status"]=="Pending")
                                         {
                                          echo'<input type="hidden" name="invoice_id" value="'.$data["invoice_id"].'"/>

                                        <div class="cart-product">
                                            <div class="inner">
                                                <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                                                
                                                <h3>'.$data["fine_grossamount"].'</a></h3>
                                                <div class="quantity-text">'.$data["user_name"].'</div>
                                                <div class="price">'.$data["generated_when"].'</div>
                                                <div class="quantity-text">'.$data["invoice_status"].'</div>
                                            </div> 
                                            
                                        <ul class="btns-boxed">
                                            <li><a href="fine_details.php?user_id='.$data["user_id"].'">Fine Details</a></li>
                                            <li><a href="pay_fine.php?invoice_id='.$data["invoice_id"].'">Pay Fine</a></li>
                                        </ul>
                                        <br>
                                        </div>';
                                         }
                                         else
                                         {
                                          
                                         }
                                         
                      }}?>
                                       
                                

                                    </div>
                                </div>
                            </div> 
                        </div>                           
                                    </li>
								</ul>
							</div>

						</nav>

						
						<!-- Main Menu End-->
						
					</div>
                    
                </div>
				
            </div>
        </div>
               
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>