<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
	<?php include 'css/style.php' ?>
	<?php include 'links/links.php' ?> 
</head>
<body>

<?php 
include 'dbcon.php';
	
if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);



	$insertquery = "insert into reges(username, password) values('$username', '$password')";

	$iquery = mysqli_query($con, $insertquery);
}

?>


	<div class="wrapper">
		<div class="form"> 
		
		<form action="" method="POST">
		<div class="header">
			<h2>Sign In</h2>
		</div>
		<div class="input-1">
			<input type="text" name="username" placeholder="Username" required>
		</div>
		<div class="input-2">
			<input type="password" name="password" placeholder="password" required>
		</div>
		<div class="text">
			<p>Forgot <span>Username / Password</span></p>
		</div>
		<div class="btn">
			<button type="submit" name="submit">SIGN IN</button>
		</div>
		<h3 class="account">Don't have an accout</h3>
		<h3 class="sign-up">SIGN UP NOW</h3>
		 
		</form>
		</div>
	</div>
</body>
</html>