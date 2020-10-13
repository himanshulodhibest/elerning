<?php   
define  ('TITLE', 'Change Pasword');
define('PAGE', 'Change Pasword');
include("includes/header.php");      
include("../db_connection.php") ;
session_start();
if($_SESSION['is_adminlogin']){
    $aEmail = $_SESSION['aEmail']; // from session . Use for show User mail id .
 }else{
     echo "<script>location.href='adminlogin.php';</script>"; // use for redirect index page
 }
 ?>

 <?PHP
$sql = "SELECT a_Name, a_Email FROM adminlogin_tb WHERE a_Email = '$aEmail'"; 
$result = $conn->query($sql);
	if($result->num_rows == 1){
    $row = $result->fetch_assoc();
	$aName = $row['a_Name'];

} 

if(isset($_REQUEST['Update'])){               
    if($_REQUEST['NewPassword'] == ""){
        $msg = '<div class="alert alert-warning mt-2">Plese fill Your New password </div>'; //this is not working
	}
	else{
		$Password = $_REQUEST['NewPassword'];
		$newpassword = md5($Password);	
        $sql = "UPDATE adminlogin_tb SET a_Password = '$newpassword' WHERE a_Email = '$aEmail'"; 
        if($conn->query($sql) == TRUE){
            $msg = '<div class="alert alert-success mt-2"> Update Successfully</div>'; 
        }else{
            $msg = '<div class="alert alert-warning mt-2">Unable to Update  </div>'; 
        }
    }
}	

?>

<div class="col col-md-10 mt-4"> <!--Start 2nd Column Change Password    -->
</br>
<div class="mb-3 mt-4 text-center" style="font-size:30px;"> 
		<i class="fas fa-stethoscope text-danger"> </i>
		<span> Welcome to  <?php echo $aName ?> </span>
		</div>
		<p class="text-center" style="font-size:20px;"> <i class="fas fa-user-secret text-danger"></i>Change Your Password</p>
		
	<div class="contener-fluid">  
		<div class="row justify-content-center">
			<div class="col-sm-6 col-md-4">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="shadow-lg p-4">
			<div class="form-group"> 
				<i class="fas fa-user"></i> 
				<label for="email" class="font-weight-bold pl-2" >Email</label>
				<input type="text" class="form-control" name="aEmail" value="<?php echo $aEmail ?>" readonly></input>
			</div>
			<div class="form-group">
			<i class="fas fa-key"></i> <label for="pass" class="font-weight-bold pl-2">Password</label>
			<input type="password" class="form-control" name="NewPassword" ></input>
			</div>					
			
			<button type="submit" class="btn btn-outline-danger mt-2 font-weight-bold btn-block shadow-sm" value="Update" name="Update">Update Password</button>
		<?php if(isset($msg)){echo $msg;}	?>

			
	</form>
			
			</div>
		</div>
</div>


 </div> <!--End 2nd Column Change Password    -->






</div>  <!-- End Row 1st Column    -->
</div> <!-- End Contaner -->
<?php
include("includes/footer.php");
?>