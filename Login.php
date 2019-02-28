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
			<div class="w3-col m5">
				<h1 class="w3-center">Login</h1>
				<a>User Name</a>
				<input id="username" required class="w3-input  " autofocus type="text"  name="uname" placeholder="Enter Username">
				<a>Password</a>
				<input id="password" required class="w3-input w3-margin-bottom" type="password" name="" placeholder="Enter password">
				<button id="Loginbutton" onclick="loginuser()" class="w3-button w3-blue w3-round w3-center w3-hover-shadow w3-hover-blue w3-text-black">Login</button><br>
				<a href="">Forgot Password</a>
				<p>Don't have an account? <a  onclick="document.getElementById('id01').style.display='block'">Register</a></p>	
			</div>
		</div>
	</div>
	<div id="id01" class="w3-modal">
		<div style="width: 300px;" class="w3-modal-content w3-animate-top w3-card-4">
			<header class="w3-container " style="background-color: #134bb1;"> 
				<span onclick="document.getElementById('id01').style.display='none'" 
				class="w3-large w3-button w3-display-topright">&times;</span>
				<h4>Select Type of Registration</h4>
			</header>
			<div class="w3-container w3-card-4 ">
				<a href="HospitalRegistration.php">
					<button style="width: 47%;float: left;" class="w3-large w3-section w3-bar-item w3-button w3-blue w3-round-xlarge w3-display-center w3-hover-shadow w3-hover-blue w3-text-black">
						<i class="far fa-hospital" style="font-size: 50px"></i><br>
						<label>Hospital</label>
					</button>
				</a>
				<a href="LabRegistration.php">
					<button style="width: 47%;float: right;" class="w3-large w3-section w3-bar-item w3-button w3-blue w3-round-xlarge w3-display-center w3-hover-shadow w3-hover-blue w3-text-black">
						<i class="fas fa-flask" style="font-size: 50px"></i><br>
						<label>Lab</label>
					</button>
				</a>
			</div>
		</div>
	</div>
</body>
</html>