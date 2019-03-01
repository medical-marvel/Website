<?php 
require_once 'Header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>TrialRequests</title>
	<script src="JS/TrialRequests.js"></script>
	<style type="text/css">
		#show{
			margin-left: 200px;
		}

	</style>
</head>
<body>
	<div id="display" class=" w3-card-4" style="display:inline-block;">
		<div><button id="show" style="margin-right: 200px;"><center>Patients</center></button></div>
		<div class="w3-section w3-center">
				<button class="w3-button w3-green">Accept</button>
				<button class="w3-button w3-red">Decline</button>
		</div>
	</div>
	
</body>
</html>