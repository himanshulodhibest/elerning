<?php
include('../db_connection.php');
session_start();
if(!isset($_SESSION['is_adminlogin'])){
	if(isset($_REQUEST['aEmail'])){	 
		$aEmail = mysqli_real_escape_string($conn, trim($_REQUEST['aEmail']));
		$aPassword = mysqli_real_escape_string($conn, trim($_REQUEST['aPassword']));
		$Password = md5($aPassword);	
		$sql = "SELECT a_Email, a_Password FROM adminlogin_tb WHERE a_Email = '".$aEmail."' AND a_Password = '".$Password."' limit 1";
		$result = $conn->query($sql);
		if($result->num_rows == 1){
			$_SESSION['is_adminlogin'] = true;
			$_SESSION['aEmail']=$aEmail;
			echo "<script>location.href='dashboard.php';</script>";
			exit;
		}if(!filter_var($aEmail,FILTER_VALIDATE_EMAIL)) {
			$msg = "Please Enter Valid Email ID";
			}
		if(strlen($aPassword) < 6) {
			 $msg = "Password must be minimum of 6 characters";
			} 
		 else {
				$msg = '<div class="alert alert-warning mt-2">Enter Valid Email or password </div>';
			} 
	}		
}else{
	echo "<script> location.href='dashboard.php';</script>"; 
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,
	initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	
	<!-- Font Awesome css -->
	<link rel="stylesheet" href="../css/all.min.css">
	
	<!-- google Font -->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
		
	<title>Login</title>
</head>
	
<body>
		<div class="text-center mt-5"> 
		<img src="../images/fiitjeelogo.jpg" alt="">
		</div>
		<p class="text-center mt-3" style="font-size:20px;"> <i class="fas fa-user-secret text-danger"></i>Admin Area</p>
		
	<div class="contener-fluid">  
		<div class="row justify-content-center">
			<div class="col-sm-6 col-md-4">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="shadow-lg p-4">
			<div class="form-group"> 
				<i class="fas fa-user"></i> 
				<label for="email" class="font-weight-bold pl-2">Email</label>
				<input type="text" class="form-control" name="aEmail" placeholder="Enter your Email id"></input>
				</div>
			<div class="form-group">
			<i class="fas fa-key"></i> <label for="pass" class="font-weight-bold pl-2">Password</label>
			<input type="password" class="form-control" name="aPassword" placeholder="Enter your Password"></input>
			</div>					
			
			<button type="submit" class="btn btn-outline-danger mt-2 font-weight-bold btn-block shadow-sm" value="login">Login</button>
		<?php if(isset($msg)){echo $msg;}	?>	
	</form>
			<div class="text-center"> <a href="../index.php" class="btn btn-info mt-3 font-weight-bold shadow-sm">Back to Home</a>
			</div>
			</div>
		</div>
	</div>

<!--bootstrap Javascript -->	 
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>

<!--End Javascript -->	 
</body>
</html>