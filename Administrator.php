<?php 
require_once 'Header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<script src="JS/PreviousTrials.js"></script>
	<link rel="stylesheet" href=""> 
</head>
<body onload="load()">
	<div>
		<select>
			<option onclick="myFunctionD()">Doctor</option>
			<option onclick="myFunctionL()">LAB</option>
			<option onclick="myFunctionB()">Patient</option>
		</select>
	</div>
	<div id="myDoctor" class=" w3-card-4">
	</div>

</body>
</html>