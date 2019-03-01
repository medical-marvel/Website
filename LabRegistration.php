<?php 
require_once 'Header.php';
?>
<!DOCTYPE html>
<head>
	<script src="JS/Registration.js"></script>
	<link rel="stylesheet" type="text/css" href="css/Register.css">
</head>
<body style="background-color: #fff8f5; overflow: scroll;">
	<h1 class="w3-center">Lab Registration</h1>
	<fieldset>
		<legend>Lab Detials</legend>
		<table>
			<tr>
				<td><label>Lab Name: </label>
				</td><td><input required id="Lab Name" type="text"></td>
			</tr>
			<tr>
				<td><label>Registration Number: </label>
				</td><td><input required id="Registration Number" type="text"></td>
			</tr>
			<tr>
				<td><label>Email Address: </label>
				</td><td><input required id="Email Address" type="Email"></td>
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
				<td><label>Head: </label>
				</td><td><input required id="Head" type="text"></td>
			</tr>
			<tr>
				<td><label>Contact Person: </label>
				</td><td><input required id="Contact Person" type="text"></td>
			</tr>
		</table>
	</fieldset>
	<fieldset>
		<legend>Lab Address</legend>
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
			<tr>
				<td><label>Google Maps Link: </label>
				</td><td><input required id="Google Maps Link" type="url"></td>
			</tr>
		</table>
	</fieldset>
	<div style="width: 100%">
	<button class="w3-blue w3-round-xxlarge  w3-hover-shadow w3-hover-blue w3-text-black" id="Addtrial" onclick="Register('Lab')">Submit</button>
	</div>
</body>
</html>