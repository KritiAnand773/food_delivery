<?php
session_start();
include('database.inc.php');
if(isset($_POST['login'])){
	$email=$_POST['email'];
    $password=$_POST['password'];
	$query="SELECT * FROM user WHERE email='$email' AND password='$password'";
	$data=mysqli_query($con,$query);
	$total = mysqli_num_rows($data);
	if ($total==1){
		$_SESSION['email_id']=$email;
		header('location:main.php');
	}
	else{
		header('location:invalid.php');
	}



}
if (isset($_SESSION['email_id'])) {
    echo '<script>window.history.forward();</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatable" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>Website with Login & Registration </title>
		<link rel="stylesheet" href="css1/log.css">
	</head>
	<body>
	<div class="wrapper">
			<span class="icon-close" onclick="closePage()"><ion-icon name="close"></ion-icon></span>
			<div class="form-box login">
			<h2>Login</h2>
		<form method="post">
			<div class="input-box">
				<span class="icon"><ion-icon name="mail"></ion-icon></span>
					<input type="email" required name="email">
					<label>Email</label>
			</div>
			<div class="input-box">
				<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
					<input type="password" id="password" required name="password">
					<label>Password</label>
			</div>
			<div class="remember-forgot">
				<label><input type="checkbox">Remember me</label>
				<a href="#">Forgot Password?</a>
			</div>
			<button type="submit" class="btn" name="login">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				Login</button>
			<div class="login-register">
				<p>Don't have an account?<a href="Registration.php" class="register-link">Register</a></p>
				<br>
				<p><a href="forgot.php" class="register-link">Forgot password / user_name?</a></p>
			</div>
		 </form>
		</div>
		<script>
				function closePage() {
			window.location.href = 'index.php';
		}
		</script>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js">
	
	</script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	</body>
</html>

