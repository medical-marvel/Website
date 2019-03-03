<?php 
require_once 'Header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>TrialRequests</title>
	<script src="JS/TrialRequests.js"></script>
	<link rel="stylesheet" href="CSS/PreviousTrials.css"> 
</head>
<body onload="load()">
	<div id="trialnav" class="w3-card-4">
		<select id="trialbar" onchange="displayinfo()">
			<option value="volvo" disabled>Select Trial</option>
		</select>
	</div>
	<div class=" w3-card-4" id="trialinfo" >
	</div>
	<div class="w3-section" id="try" style="display:none;">
		<button class="w3-button w3-green" onclick="myfunction()">Accept</button>
		<button class="w3-button w3-red" onclick="document.getElementById('DeclineReason').style.display='block'">Decline</button> 
	</div> 
</body>
</html>