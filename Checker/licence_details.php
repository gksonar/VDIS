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
  $select = "SELECT user_licence.*,user_register.* FROM user_licence INNER JOIN user_register ON user_licence.user_id = user_register.user_id where user_licence.user_id='$user_id'";

  mysqli_query($con,"SET CHARACTER SET 'utf8'");
  mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
  //echo $select;
  if ($result = $con->query($select))
  {
      while ($data = $result->fetch_assoc())
      {
          echo '<div class="container">
                                <h6 class="subtitle " style="margin-top:0px">RC Information</h6>
                                <dl class="row mb-4">
                                    <dt class="col-5  font-weight-normal text-left">User Id</dt>
                                    <dd class="col-7 text-right">'.$data["user_id"].'</dd>
                                    <dt class="col-5  font-weight-normal text-left">DL ID</dt>
                                    <dd class="col-7 text-right">'.$data["l_id"].'</dd>
                                    <dt class="col-5  font-weight-normal text-left">Licence Number</dt>
                                    <dd class="col-7 text-right">'.$data["l_no"].'</dd>
                                    <dt class="col-5  font-weight-normal text-left">RTO Location</dt>
                                    <dd class="col-7 text-right">'.$data["l_rto_loaction"].'</dd>
                                    
                                   
                                     <dt class="col-6  font-weight-normal text-left">Issue Date</dt>
                                    <dd class="col-6 text-right">'.$data["l_issue_date"].'</dd>

                                    <dt class="col-6  font-weight-normal text-left">Valid Upto</dt>
                                    <dd class="col-6 text-right"><b>'.$data["l_expiry_date"].'</b></dd>
                                  
                                   
                                 </dl>   
                                <div class="row">
                            </div>'; }}?>
   

</body>
</html>

