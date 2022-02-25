<?php
session_start();
include'db.php';
 ?>
<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/meto/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 19:27:15 GMT -->
<head>
<meta charset="utf-8">
<title>Vehicle DIS</title>
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
    <?php include "header-1.php";?>
    
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
                        <?php
            $sql=mysqli_query($con,"select * from user_register where user_id='".$_SESSION['user_id']."'");
            while($res=mysqli_fetch_assoc($sql))
            {

            ?>
            <h4 align="center" style="color:#3b67b3 ">User Email : <?php echo $res['user_email'];?></h4><?php } ?>
                        <div class="sec-title">
                            <div class="title">Ready to Get Sign In</div>
                            <h2>Change Password</h2>
                        </div>
                        
                        <!-- Default Form -->
                        <div class="default-form contact-form">
                            <form method="post" action="" id="contact-form">
                                <div class="form-group">
                                    <input type="text" name="password" value="" placeholder="Password" >
                                </div>                              
                                
                                <div class="form-group">
                                    <input type="text" name="newpassword" value="" placeholder="New Password" >
                                </div>
                                <div class="form-group">
                                    <input type="text" name="renterpassword" value="" placeholder="Password" >
                                </div>
                            
                                                            
                                <div class="form-group">
                                    <div class="row" style="float: right">                                      
                                    <a href="user_profile.php"><input type="button"  style=" margin-left: -15%;" value="Back" class="theme-btn btn-style-three"><span class="txt"></span>                                        
                                    </a>
                                    <input type="submit" value="Change Password" name="submit" class="theme-btn btn-style-three"><span class="txt"></span>

                                    
                                    
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
        
</div>
<?php include "footer.php";?>

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
</html>


<?php
                                                        
if(isset($_POST['submit']))
{
    
    $query = 'select * from user_register where user_password="'.$_POST['password'].'" and user_email ="'.$_SESSION['user_email'].'" ';

$res=mysqli_query($con,$query);

if(mysqli_num_rows($res)>0)
{

if(strlen($_POST['newpassword']) >= 5 )
    {
        if($_POST['newpassword']==$_POST['renterpassword'])
        {
        $query1='update user_register set user_password="'.$_POST['newpassword'].'" where user_email ="'.$_SESSION['user_email'].'" ';    
        $res=mysqli_query($con,$query1);

          echo '<script type="text/javascript">'; 
          echo 'alert("Password changed Successfully !!!! ");'; 
          echo 'window.location.href = "user_profile.php";'; 
          echo '</script>';
        }
        else
        {
        echo '<script type="text/javascript">';
        echo 'alert(" password is not matched...  try again !!!! ");'; 
        echo 'window.location.href = "chang_password.php";'; 
        echo '</script>';
        }
    }
else 
{
    echo '<script type="text/javascript">';
    echo 'alert(" password is greater than 6");'; 
    echo 'window.location.href = "change_password.php";'; 
    echo '</script>';
}
}
else
{
    echo '<script type="text/javascript">';
    echo 'alert("Old password is not matched...  try again");';
    echo '</script>';
            

}
}
?>
