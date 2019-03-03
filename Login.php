<?php 
require_once 'Header.php';
?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css/Login.css">
	<script src="JS/Login.js"></script>	
</head>
<body style="background-color: #fff8f5;">

	<div class="w3-container w3-display-middle w3-card-4 w3-round-xlarge" style="background-color: #134bb1; color: white; width: 600px; ">
		<div class="w3-row">
			<div class="w3-col m6">
				<img src="images/Logo.png" style="width:90%;margin-top: 40px;">
			</div>
			<div class="w3-col m6">
				<h1 class="w3-center">Login</h1>
				<a>User Name</a>
				<input id="username" required class="w3-input" autofocus type="text"  name="uname" placeholder="Enter Username">
				<a>Password</a>
				<input id="password" required class="w3-input w3-margin-bottom" type="password" name="" placeholder="Enter password">
				<button id="login_button" onclick="loginuser()" class="w3-button w3-blue w3-round w3-center w3-hover-shadow w3-hover-blue w3-text-black">Login</button><br>
				<a href="">Forgot Password</a>
				<p>Don't have an account? <a href="LabRegistration.php">Register</a></p>	
			</div>
		</div>
	</div>
</body>
</html>