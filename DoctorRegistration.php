<?php 
require_once 'Header.php';
?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css/Register.css">
	<script src="JS/Registration.js"></script>	
</head>
<body style="background-color: #fff8f5; overflow: scroll;">
		
		<h1 class="w3-center">Doctor Registration</h1>
		<fieldset>
			<legend>Doctor Detials</legend>
			<table>
				<tr>
					<td><label>Doctor Name: </label>
					</td><td><input required id="Doctor Name"  type="text"></td>
				</tr>
				<tr>
					<td><label>Email Address: </label>
					</td><td><input required id="Email Address" type="Email" ></td>
				</tr>
				<tr>
					<td><label>Password: </label>
					</td><td><input required id="Password" type="Password"></td>
				</tr>
				<tr>
					<td><label>Confirm Password: </label>
					</td><td><input required id="Confirm Password" type="Password"></td>
				</tr>
				<tr>
					<td><label>Contact Number: </label>
					</td><td><input required id="Contact Number" type="Number"></td>
				</tr>
				<tr>
					<td><label>Specialization: </label>
					</td><td><input required id="Specialization" type="text"></td>
				</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend>Clinic Address</legend>
			<table>
				<tr>
					<td><label>Address: </label>
					</td><td><input required id="Address" type="text"></td>
				</tr>
				<tr>
					<td><label>Pincode: </label>
					</td><td><input required id="Pincode" type="Number"></td>
				</tr>
				<tr>
					<td><label>City: </label>
					</td><td><input required id="City" type="text"></td>
				</tr>
				<tr>
					<td><label>State: </label>
					</td><td><input required id="State" type="text"></td>
				</tr>
			</table>
		</fieldset>
		<button style="margin-bottom: 20px; " class="w3-center w3-button w3-col s4 w3-bar-item w3-button w3-blue w3-round-xxlarge  w3-hover-shadow w3-hover-blue w3-text-black" id="Addtrial" onclick="Register('Doctor')" style="width:100px;">Submit</button>
</body>
</html>