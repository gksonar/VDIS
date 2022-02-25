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
  hello hi quesry copy karun tikde paste kar 
  $select = "SELECT rc_user.*,user_register.* FROM rc_user INNER JOIN user_register ON rc_user.user_id = user_register.user_id where user_register.user_id='$user_id'";
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
                                    <dt class="col-5  font-weight-normal text-left">Rc no</dt>
                                    <dd class="col-7 text-right">'.$data["r_id"].'</dd>
                                    <dt class="col-5  font-weight-normal text-left">Name</dt>
                                    <dd class="col-7 text-right">'.$data["user_name"].'</dd>
                                    <dt class="col-5  font-weight-normal text-left">Vehicle No</dt>
                                    <dd class="col-7 text-right">'.$data["rc_vehicle_no"].'</dd>
                                    <dt class="col-5  font-weight-normal text-left">Vehicle Type</dt>
                                    <dd class="col-7 text-right">'.$data["rc_vehicle_type"].'</dd> 
                                    <dt class="col-5  font-weight-normal text-left">Engine Number</dt>
                                    <dd class="col-7 text-right">'.$data["rc_engine_no"].'</dd> 
                                    <dt class="col-5  font-weight-normal text-left">Chasis No</dt>
                                    <dd class="col-7 text-right">'.$data["rc_chasis_no"].'</dd> 
                                    <dt class="col-5  font-weight-normal text-left">Type-Model</dt>
                                    <dd class="col-7 text-right">'.$data["rc_vehicle_type"].'</dd>
                                 
                                
                                    <dt class="col-6  font-weight-normal text-left">Class</dt>
                                    <dd class="col-6 text-right">'.$data["rc_vehicle_class"].'</dd>
                                    <dt class="col-6  font-weight-normal text-left">Fuel</dt>
                                    <dd class="col-6 text-right">'.$data["rc_fuel"].'</dd>

                                    <dt class="col-6  font-weight-normal text-left">Body Color</dt>
                                    <dd class="col-6 text-right">'.$data["rc_body_color"].'</dd>

                                    <dt class="col-6  font-weight-normal text-left">Seat Capacity</dt>
                                    <dd class="col-6 text-right">'.$data["rc_seat_cap"].'</dd>
                                     <dt class="col-6  font-weight-normal text-left">Issue Date</dt>
                                    <dd class="col-6 text-right">'.$data["rc_issue_date"].'</dd>

                                    <dt class="col-6  font-weight-normal text-left">Valid Upto</dt>
                                    <dd class="col-6 text-right"><b>'.$data["rc_valid_upto"].'</b></dd>
                                    <dt class="col-6  font-weight-normal text-left">Status</dt>
                                    <dd class="col-6 text-right"><b>'.$data["rc_status"].'</b></dd>
                                 </dl>   
                                <div class="row">
                            </div>'; }}?>
   

</body>
</html>

