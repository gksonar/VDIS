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
  <?php
  require 'db.php';
  extract($_POST);
  $select = "SELECT * from user_register where user_id='$user_id'";
  mysqli_query($con,"SET CHARACTER SET 'utf8'");
  mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
  //echo $select;
  if ($result = $con->query($select))
  {
      while ($data = $result->fetch_assoc())
      {
          echo '<div class="container">
                                <h6 class="subtitle " style="margin-top:0px">User Information</h6>
                                <dl class="row mb-4">
                                    <dt class="col-5  font-weight-normal text-left">User Id</dt>
                                    <dd class="col-7 text-right">'.$data["user_id"].'</dd>
                                    <dt class="col-5  font-weight-normal text-left">User Name</dt>
                                    <dd class="col-7 text-right">'.$data["user_name"].'</dd>
                                    <dt class="col-5  font-weight-normal text-left">Mobile no </dt>
                                    <dd class="col-7 text-right">'.$data["user_mobile"].'</dd>
                                    <dt class="col-5  font-weight-normal text-left">User Email</dt>
                                    <dd class="col-7 text-right">'.$data["user_email"].'</dd>
                                    <dt class="col-5  font-weight-normal text-left">Password</dt>
                                    <dd class="col-7 text-right">'.$data["user_password"].'</dd> 
                                    <dt class="col-5  font-weight-normal text-left">Address</dt>
                                    <dd class="col-7 text-right">'.$data["user_address"].'</dd> 
                                    <dt class="col-5  font-weight-normal text-left">License No</dt>
                                    <dd class="col-7 text-right">'.$data["user_license_no"].'</dd> 
                                    <dt class="col-5  font-weight-normal text-left">Created Time</dt>
                                    <dd class="col-7 text-right">'.$data['created_time'].'</dd> 
                                   
                                 </dl>   
                                <div class="row">
                            </div>'; }}?>
   

</body>
</html>


