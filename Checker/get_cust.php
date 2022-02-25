<?php 

@session_start();

 require '../db.php';


$lastid = $_GET['lastId'];

 
$sql = "SELECT rc_user.*,user_register.* FROM rc_user INNER JOIN user_register ON rc_user.user_id = user_register.user_id where user_register.user_id  >'".$lastid."' limit 20 ";
mysqli_query($con,"SET CHARACTER SET 'utf8'");
                               mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
                               
 $result = $con->query($sql);

 while($data = mysqli_fetch_assoc($result)) {   

   
                           echo'
                                      <tr class="well"  id="'.$data["user_id"].'">
                                     <td>'.$data["r_id"].'</td>
                                     <td>
                                         <div class="media">
                                            
                                             <div class="media-body">
                                                 <p class="mb-0">'.$data["rc_vehicle_no"].'</p>
                                                 <p class=" small">'.$data["user_name"].'&nbsp - '.$data["rc_myon"].'-'.$data["rc_body_color"].'</p>
                                             </div>
                                         </div>
                                     </td>
                                     <td>                                   
                                      <a href="javascript:;" class="view" data-toggle="modal" data-userid="'.$data["user_id"].'" data-target="#addmoney"><span class="btn-primary btn btn-sm btn-30 rounded"" style="" >RC</span></a>    
                                      </td>
                                      <td> 
                                      <a href="javascript:;" class="puc" data-toggle="modal" data-userid="'.$data["user_id"].'" data-target="#addmoney"><span class="btn-primary btn btn-sm btn-30 rounded"" style="" >PUC</span></a>    
                                     </td>
                                     <td> 
                                       <a href="javascript:;" class="license" data-toggle="modal" data-userid="'.$data["user_id"].'" data-target="#addmoney"><span class="btn-primary btn btn-sm btn-30 rounded"" style="" >License</span></a>            
                                  
                                  <td> 
                                     <a href="javascript:;" class="insurance" data-toggle="modal" data-userid="'.$data["user_id"].'" data-target="#addmoney"><span class="btn-primary btn btn-sm btn-30 rounded"" style="" >Insurance</span></a>   
                                  </td>
                                  <td> 
                                   <a href="javascript:;" class="user" data-toggle="modal" data-userid="'.$data["user_id"].'" data-target="#addmoney"><span class="btn-primary btn btn-sm btn-30 rounded"" style="" >User</span></a>
                                  </td>
                                  <td> 
                                  <a href="fine_new.php?user_id='.$data["user_id"].'"> <span class="material-icons btn-success btn btn-sm btn-30 rounded">Fine</span></a>
                                  </td>
                                  
                                  
                                 </tr>
                             '; 
                         
                     }
                     ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

</body>
 <script type="">
          $(".view").click(function () {
               var user_id = $(this).data('userid');
               
                $.ajax({
                  type: "POST",
                  data : {"user_id":user_id},
                  url : "rc_details.php",
                  success : function (data) {
                    console.log(data);
                    $("#modal_data").html(data);
                  }
                })
               
             }) 
       $(".puc").click(function () {
               var user_id = $(this).data('userid');
               
                $.ajax({
                  type: "POST",
                  data : {"user_id":user_id},
                  url : "puc_details.php",
                  success : function (data) {
                    console.log(data);
                    $("#modal_data").html(data);
                  }
                })
               
             }) 
        
         $(".user").click(function () {
               var user_id = $(this).data('userid');
               
                $.ajax({
                  type: "POST",
                  data : {"user_id":user_id},
                  url : "user_details.php",
                  success : function (data) {
                    console.log(data);
                    $("#modal_data").html(data);
                  }
                })
               
             }) 
        
         $(".license").click(function () {
               var user_id = $(this).data('userid');
               
                $.ajax({
                  type: "POST",
                  data : {"user_id":user_id},
                  url : "user_details.php",
                  success : function (data) {
                    console.log(data);
                    $("#modal_data").html(data);
                  }
                })
               
             }) 
        
         $(".insurance").click(function () {
               var user_id = $(this).data('userid');
               
                $.ajax({
                  type: "POST",
                  data : {"user_id":user_id},
                  url : "user_details.php",
                  success : function (data) {
                    console.log(data);
                    $("#modal_data").html(data);
                  }
                })
               
             }) 
        
 
    </script>
         </script>
</html>

