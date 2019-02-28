<?php 
require_once 'Header.php';
?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css/Register.css">
	<script src="JS/Login.js"></script>	
</head>
<body style="background-color: #fff8f5;">
		<h1 class="w3-center">Lab Registration</h1>
		<fieldset>
			<legend>Lab Detials</legend>
			<table>
				<tr>
					<td><label>Lab Name: </label>
					</td><td><input type="text"></td>
				</tr>
				<tr>
					<td><label>Email Address: </label>
					</td><td><input type="text"></td>
				</tr>
				<tr>
					<td><label>Contact Number: </label>
					</td><td><input type="text"></td>
				</tr>
				<tr>
					<td><label>Head: </label>
					</td><td><input type="text"></td>
				</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend>Lab Address</legend>
			<table>
				<tr>
					<td><label>Address Line 1: </label>
					</td><td><input type="text"></td>
				</tr>
				<tr>
					<td><label>Address Line 2: </label>
					</td><td><input type="text"></td>
				</tr>
				<tr>
					<td><label>Pincode: </label>
					</td><td><input type="text"></td>
				</tr>
				<tr>
					<td><label>City: </label>
					</td><td><input type="text"></td>
				</tr>
				<tr>
					<td><label>State: </label>
					</td><td><input type="text"></td>
				</tr>
				<tr>
					<td><label>Google Maps Link: </label>
					</td><td><input type="url"></td>
				</tr>
			</table>
		</fieldset>
</body>
</html>