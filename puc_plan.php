<?php
if(isset($_POST["puc_plan_period"])){
	 $str = $_POST['puc_plan_period'];
				
     include "db.php"; 

	   $select1=mysqli_query($con,"select * from puc_plan_master where puc_plan_id='".$str."'") or die(mysqli_error($con));

	   ?>
	   <?php
	   
	  
	 while($sele1=mysqli_fetch_array($select1))
	{
	echo"<option value=\"{$sele1['puc_plan_amount']}\">{$sele1['puc_plan_amount']}</option>";
	}	 
		
}
?>