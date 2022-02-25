
<?php
   //include("db.php");
  session_start();
?> 

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/forms/basic_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:07:32 GMT -->
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Melody</title>
    <style>
      .result{
       color:red;
      }
      td
      {
        text-align:center;
      }
    </style>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />

    <!-- Color Switcher Mockup -->
    <link href="css/color-switcher-design.css" rel="stylesheet" />

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <!-- Required meta tags -->

  
  <link rel="stylesheet" href="admin/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="admin/ images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:admin/partials/_navbar.html -->
    
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:admin/partials/_settings-panel.html -->
      
      <!-- partial -->
      <!-- partial:admin/partials/_sidebar.html -->
     
      <!-- partial -->
      <div class="main-panel" style="    width: calc(120% - 255px);">        
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="" style="margin-left: 20%;"  >
                Fine  
            </h3>
          
          </div>
          <div class="row">
           
            <div class="col-12 grid-margin" style="margin-left: 20%;    max-width: 60%;">
              <div class="card">
                <div class="card-body">                 
                  
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            
                            <th>No.</th>
                            <th>Fine Type </th>
                            <th>Quantity</th>
                            <th>Charges</th>
                            <th>Add</th>
                            
                          
                        </tr>
                      </thead>

                      
                      <tbody>
                      <input type="hidden" name="r_id" value="1">
                        <tr>
                          <td scope="row">1</td>
                          <td>
                            <select name="vegitable[]" id="vegitable"  class="form-control">
                            <?php 
                            include "db.php";
                              $sql = "SELECT * FROM fine_user";
                              $query = mysqli_query($con,$sql);
                              while($row = mysqli_fetch_assoc($query)){
                              ?>
                              <option name="<?php echo $row['fine_id']; ?>[]"  id="<?php echo $row['fine_id']; ?>" value="<?php echo $row['fine_name']; ?>" class="vegitable custom-select">
                              
                              <?php echo $row['fine_name']; ?>
                              </option>
                              <?php  }?>   
                              </select>
                          </td>
                          <td>
                           <input type="number" id="qty" min="0" max="2" value="1" name="dty[]" class="form-control form-control-sm">
                          </td>
                          <td>
                           <p name="price[]" id="price"></p>
                          </td>
                             <td>
                            <button class="btn btn-outline-primary"  id="add">Add</button>
                          </td>             
                        
                        </tr>
                        
                      </tbody>
   
                     
                    </table>

                  </div>
                </div>
              </div>  
                 
                </div>
              </div>
            </div>            
          </div>

         <div class="row">
           <div class="col-lg-12" style="margin-left: 20%; max-width: 60%;">
             <div class="card px-2">
               <div class="card-body">
                 <div class="container-fluid">
                   <h3 class="text-right my-3"></h3>
                   <hr />
                 </div>
             
                 <div class="col-md-12 mt-4" >
                   <div class="p-4">
                    <form action="" method="POST">
                     <div class="text-center">
                       
                     </div>
                     <?php 
                     include "db.php"; 
                     $select = "SELECT rc_user.*,user_register.* FROM rc_user INNER JOIN user_register ON rc_user.user_id = user_register.user_id where user_register.user_id='".$_GET['user_id']."'";
                      mysqli_query($con,"SET CHARACTER SET 'utf8'");
                       mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
                                                  //echo $select;
                     $i=1;
                      if ($result = $con->query($select))
                         {
                               while ($data = $result->fetch_assoc())
                               {
                                  echo'<input type="hidden" name="user_id" value="'.$data["user_id"].'">
                                  <div class="row">
                                  <div class="col-xs-6 col-sm-6 col-md-6"><span id=""></span>User Name: <span id=""></span>'.$data["user_name"].'</div>

                                  <div class="col-xs-6 col-sm-6 col-md-6 text-right"><span id=""></span>Vehicle No: <span id=""></span>'.$data["rc_vehicle_no"].'</div>
                                  </div>';
                               ?>
                                                    
                                  <div class="row">
                                  <div class="col-xs-6 col-sm-6 col-md-6"><span id=""></span>Time: <span id="time"></span ></div>

                                  <div class="col-xs-6 col-sm-6 col-md-6 text-right"><span id=""></span> <span id=""></span></div>
                                  </div>'


                     <div class="row">
                       <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                        
                       </div>
                     </div>
                     <div class="row">
                       <table id="receipt_bill" class="table">
                         <thead>
                           <tr class="bg-dark text-white">
                             <th>No.</th>
                             <th>Fine Type</th>
                             <th>Quantity</th>
                             <th class="text-center">Charges</th>
                             <th class="text-center">Total</th>
                           </tr>
                         </thead>
                         <tbody id="new"></tbody>
                         <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td class="text-right text-dark">
                             <!-- <h5><strong>Sub Total: ₹ </strong></h5>
                             <h5><strong>Tax (5%) : ₹ </strong></h5> -->
                           </td>
                           <td class="text-center text-dark">
                             <h5>

                               <strong><span name="" id="subTotal"></span></strong>
                               
                             </h5>
                             <h5>
                               <strong><span name="" id="taxAmount"></span></strong>
                             </h5>
                           </td>
                         </tr>
                         <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td class="text-right text-dark">
                             <h5><strong> Total: ₹ </strong></h5>
                           </td>
                           <td class="text-center text-danger" >
                            <input type="Number" class="form-control form-control-sm" readonly id="totalPayment" name="totalPayment" placeholder=""  required>
                             <!-- <h5 id="totalPayment"><strong> </strong></h5> -->
                           </td>
                         </tr>

                       </table>
                     </div>
                     <div class="container-fluid w-100">
                           <button type="submit" name="submit"  class="btn btn-primary float-right mt-4 ml-2"><i class="fa fa-print mr-1"></i>Apply Fine</button>
                           <a href="#" class="btn btn-success float-right mt-4"><i class="fa fa-share mr-1"></i>Print</a>
                         </div>

                       <?php }}?>
                   </div>
                 </div>
               </div>
               </form>
             </div>
           </div>
         </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:admin/partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  

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

  <script src="admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="admin/js/off-canvas.js"></script>
  <script src="admin/js/hoverable-collapse.js"></script>
  <script src="admin/js/misc.js"></script>
  <script src="admin/js/settings.js"></script>
  <script src="admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="admin/js/file-upload.js"></script>
  <script src="admin/js/typeahead.js"></script>
  <script src="admin/js/select2.js"></script>
 <script>
    $(document).ready(function(){
      $('#vegitable').change(function() {
       var fine_id = $(this).find(':selected')[0].id;
        $.ajax({
           method:'POST',
           url:'fetch.php',
           data:{fine_id:fine_id},
           dataType:'json',
           success:function(data)
             {
                $('#price').text(data.fine_charge);
  
                //$('#qty').text(data.product_qty);
             }
        });
      });
     
      //add to cart 
      var count = 1;
      $('#add').on('click',function(){
     
         var name = $('#vegitable').val();
         var qty = $('#qty').val();
         var price = $('#price').text();
  
         if(qty == 0)
         {
            var erroMsg =  '<span class="alert alert-danger ml-5">Minimum Qty should be 1 or More than 1</span>';
            $('#errorMsg').html(erroMsg).fadeOut(9000);
         }
         else
         {
            billFunction(); // Below Function passing here 
         }
          
         function billFunction()
           {
           var total = 0;
        
           $("#receipt_bill").each(function () {
           var total =  price*qty;
           var subTotal = 0;
           subTotal += parseInt(total);
           
           var table =   '<tr><td>'+ count +'</td><td>'+ name + '</td><td>' + qty + '</td><td>' + price + '</td><td><strong><input type="hidden" id="total" value="'+total+'">' +total+ '</strong></td></tr>';
           $('#new').append(table)
  
            // Code for Sub Total of Vegitables 
             var total = 0;
             $('tbody tr td:last-child').each(function() {
                 var value = parseInt($('#total', this).val());
                 if (!isNaN(value)) {
                     total += value;
                 }
             });
              $('#subTotal').val(total);
                
             // Code for calculate tax of Subtoal 5% Tax Applied
               var Tax = (total * 0) / 100;
               $('#taxAmount').val(Tax.toFixed(2));
  
              // Code for Total Payment Amount
  
              var Subtotal = $('#subTotal').val();
              var taxAmount = $('#taxAmount').val();
  
              var totalPayment = parseFloat(Subtotal) + parseFloat(taxAmount);
              $('#totalPayment').val(totalPayment.toFixed(2)); // Showing using ID 
         
          });
          count++;
         } 
        });
            // Code for year 
              
            var currentdate = new Date(); 
              var datetime = currentdate.getDate() + "/"
                 + (currentdate.getMonth()+1)  + "/"
                 + currentdate.getFullYear();
                 $('#year').text(datetime);
  
            // Code for extract Weekday     
                 function myFunction()
                  {
                     var d = new Date();
                     var weekday = new Array(7);
                     weekday[0] = "Sunday";
                     weekday[1] = "Monday";
                     weekday[2] = "Tuesday";
                     weekday[3] = "Wednesday";
                     weekday[4] = "Thursday";
                     weekday[5] = "Friday";
                     weekday[6] = "Saturday";
  
                     var day = weekday[d.getDay()];
                     return day;
                     }
                 var day = myFunction();
                 $('#day').text(day);
      });
 </script>
  
 <!-- // Code for TIME -->
 <script>
     window.onload = displayClock();
  
      function displayClock(){
        var time = new Date().toLocaleTimeString();
        document.getElementById("time").innerHTML = time;
         setTimeout(displayClock, 1000); 
      }
 </script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/forms/basic_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:07:34 GMT -->
</html>


<?php

include'db.php';
 if(isset($_POST['submit']))
 {

extract($_POST);
$c_id=$_SESSION['c_id'];
 
$query="INSERT INTO `invoice_user`(`user_id`, `c_id`, `fine_totalamount`, `fine_taxamount`, `fine_grossamount`,`invoice_status`) VALUES ('$user_id','$c_id','$subTotal','$taxAmount','$totalPayment','Pending')";
$asd = mysqli_query($con,$query)or die(mysqli_error($con));

if($asd)
{
  echo '<script type="text/javascript">';
  echo " alert('Receipt Generate Successfully ');";
  echo 'window.location.href = "search_vehicle.php";';
  echo '</script>';
}  
else
{ 
  echo '<script type="text/javascript">';
  echo " alert('Sorry... Cant Generated');";
  echo 'window.location.href = "search_vehicle.php";';
  echo '</script>';
}

}
?>


