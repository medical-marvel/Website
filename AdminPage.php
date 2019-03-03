<?php 
require_once 'Header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator Page</title>
	<script src="JS/AdminPage.js"></script>
</head>
<body onload="load()">
	<h1 class="w3-header"><center>Regulatory Authority</center></h1>
	<div class="w3-container" style="margin: 16px;padding: 12px;background-color: #ffffcc">
		<h1>Doctors</h1>
		<div id="trialnav">
			<select class="Yes" id="trialbar" onchange="displayinfo()">
				<option value="volvo" disabled>Select Trial</option>
			</select>
		</div>
		<div  id="trialinfo"> </div>
		<div class="w3-section" id="try" style="display:none;">
			<button class="w3-button w3-green" onclick="MyDoc()">Accept</button>
			<button class="w3-button w3-red" onclick="document.getElementById('decline_reason').style.display='block'">Decline</button> 
		</div> 
	</div>
	<div id="decline_reason" class="w3-modal">
		<div class="w3-modal-content w3-card-4 w3-white">
			<header class="w3-container w3-grey"> 
				<span onclick="document.getElementById('decline_reason').style.display='none'" class="w3-button w3-display-topright">&times;</span>
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

	<div class="w3-container w3-teal" style="margin: 16px;padding: 12px">
		<h1>Labs</h1>
		<div id="trialnav">
			<select class="Yes" id="trialbar1" onchange="displayinfo1()">
				<option value="volvo" disabled>Select Trial</option>
			</select>
		</div>
		<div  id="trialinfo1"> 

		</div>
		<div class="w3-section" id="try1" style="display:none;">
			<button class="w3-button w3-green">Accept</button>
			<button class="w3-button w3-red" onclick="document.getElementById('decline_reason').style.display='block'">Decline</button> 
		</div>
	</div>
	<div class="w3-container" style="margin: 16px;padding: 12px;background-color: #ffffcc">
		<h1>Patient</h1>
		<div id="trialnav">
			<select class="Yes" id="trialbar2" onchange="displayinfo2()">
				<option value="volvo" disabled>Select Trial</option>
			</select>
		</div>
		<div id="trialinfo2"> 

		</div>
		<div class="w3-section" id="try2" style="display:none;">
			<button class="w3-button w3-green">Accept</button>
			<button class="w3-button w3-red" onclick="document.getElementById('decline_reason').style.display='block'">Decline</button> 
		</div>
	</div>
	<div class="w3-container w3-teal" style="margin: 16px;padding: 12px">
		<h1>Trials</h1>
		<div id="trialnav">
			<select class="Yes" id="trialbar3" onchange="displayinfo3()">
				<option value="volvo" disabled>Select Trial</option>
			</select>
		</div>
		<div id="trialinfo3"> 

		</div>
		<div class="w3-section" id="try3" style="display:none;">
			<button class="w3-button w3-green">Accept</button>
			<button class="w3-button w3-red" onclick="document.getElementById('decline_reason').style.display='block'">Decline</button> 
		</div>
	</div>
</body>
</html>