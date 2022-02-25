<?php
   //include("db.php");
  session_start();
?> 

  
 
<?php
include'db.php';
$msg = "";
if($_SERVER["upload"] == "POST")
{
extract($_POST);
$user_id=$_SESSION['user_id'];
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "img/".$filename;
         
  
 
        // Get all the submitted data from the form
        $query = "INSERT INTO image ('user_id','filename') VALUES ('$user_id,'$filename')";
        $asd = mysqli_query($con,$query)or die(mysqli_error($con));
 
        // Execute query
        



         
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
            echo $msg;
        }else{
            $msg = "Failed to upload image";
      }
  }
  $result = mysqli_query($db, "SELECT * FROM image");
while($data = mysqli_fetch_array($result))
{
 
      ?>
<img src="<?php echo $data['Filename']; ?>">
 
<?php
}
?>
 
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>
<div id="content">
 
  <form method="POST" action="" enctype="multipart/form-data">
      <input type="file" name="uploadfile" value=""/>
       
      <div>
          <button type="submit" name="upload">UPLOAD</button>
        </div>
  </form>
</div>
</body>
</html>