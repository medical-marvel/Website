<?php 
require_once 'Header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator Page</title>
	<style type="text/css" href="AdminPage.css">
</style>
<script src="JS/AdminPage.js"></script>
</head>
<body onload="load()">
	<h1 class="w3-header">Regulatory Authority</h1>
	<div class="w3-container w3-teal" style="margin: 16px;padding: 12px">
		<h1>Doctors</h1>
		<div id="trialbar"></div>
		<div  id="trialinfo"> 
			
		</div>
		<div class="w3-section" id="try" style="display:none;">
				<button class="w3-button w3-green">Accept</button>
				<button class="w3-button w3-red" onclick="document.getElementById('DeclineReason').style.display='block'">Decline</button> 
			</div> 

		<div id="DeclineReason" class="w3-modal">
			<div class="w3-modal-content w3-card-4 w3-white">
				<header class="w3-container w3-grey"> 
					<span onclick="document.getElementById('DeclineReason').style.display='none'" class="w3-button w3-display-topright">&times;</span>
					<h4>Mention Reason of Declining</h4>
				</header>
				<div class="w3-dropdown-hover" style="width: 100%">
					<button class="w3-button">Reason</button>
					<div class="w3-dropdown-content w3-bar-block w3-border">
						<a class="w3-bar-item w3-button">Not Registered on IRDAI</a>
						<a class="w3-bar-item w3-button">Incomplete Information</a>
						<a class="w3-bar-item w3-button">Information Mismatch</a>
						<a class="w3-bar-item w3-button">Other</a>
					</div>
				</div>
				<button class="w3-button w3-center">Submit</button>
			</div>
		</div>
	</div>
	<div class="w3-container w3-teal" style="margin: 16px;padding: 12px">
		<h1>Labs</h1>
		<div id="trialbar1"></div>
		<div  id="trialinfo1"> 
			
		</div>
		<div class="w3-section" id="try1" style="display:none;">
				<button class="w3-button w3-green">Accept</button>
				<button class="w3-button w3-red" onclick="document.getElementById('DeclineReason').style.display='block'">Decline</button> 
			</div>
	</div>
	<div class="w3-container w3-teal" style="margin: 16px;padding: 12px">
		<h1>Patient</h1>
		<div id="trialbar2"></div>
		<div  id="trialinfo2"> 
			
		</div>
		<div class="w3-section" id="try2" style="display:none;">
				<button class="w3-button w3-green">Accept</button>
				<button class="w3-button w3-red" onclick="document.getElementById('DeclineReason').style.display='block'">Decline</button> 
			</div>
	</div>
	<div class="w3-container w3-teal" style="margin: 16px;padding: 12px">
		<h1>Trials</h1>
		<div id="trialbar3"></div>
		<div  id="trialinfo3"> 
			
		</div>
		<div class="w3-section" id="try3" style="display:none;">
				<button class="w3-button w3-green">Accept</button>
				<button class="w3-button w3-red" onclick="document.getElementById('DeclineReason').style.display='block'">Decline</button> 
			</div>
	</div>
</body>
</html>