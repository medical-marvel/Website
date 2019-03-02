<?php 
require_once 'Header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator Page</title>
	<style type="text/css">
		.w3-dropdown-hover .w3-button
		{
			width: 100%;
		}
	</style>
	<script src="AdminPage.js"></script>
</head>
<body onload="load()">
	<div class="w3-container w3-teal" style="margin: 16px;padding: 12px">
		<h1>Hospitals</h1>
		<div class="w3-card w3-white" id="trialinfo" style="width: 300px;padding: 8px;margin: 8px;float: left;display:inline-block;float:left;">
			<h3>Name: </h3>
			<label>Unique Identification Number: </label>
			<div class="w3-section w3-center
			">
				<button class="w3-button w3-green">Accept</button>
				<button class="w3-button w3-red" onclick="document.getElementById('DeclineReason').style.display='block'">Decline</button>
			</div>
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
		<div class="w3-card w3-white" style="width: 300px;padding: 8px;margin: 8px;float: left;">
			<h3>Name: </h3>
			<label>Unique Identification Number: </label>
			<div class="w3-section w3-center">
				<button class="w3-button w3-green">Accept</button>
				<button class="w3-button w3-red">Decline</button>
			</div>
		</div>
	</div>
	<div class="w3-container w3-teal" style="margin: 16px;padding: 12px">
		<h1>Doctor</h1>
		<div class="w3-card w3-white" style="width: 300px;padding: 8px;margin: 8px;float: left;">
			<h3>Name: </h3>
			<label>Unique Identification Number: </label>
			<div class="w3-section w3-center">
				<button class="w3-button w3-green">Accept</button>
				<button class="w3-button w3-red">Decline</button>
			</div>
		</div>
	</div>
	<div class="w3-container w3-teal" style="margin: 16px;padding: 12px">
		<h1>Patient</h1>
		<div class="w3-card w3-white" style="width: 300px;padding: 8px;margin: 8px;float: left;">
			<h3>Name: </h3>
			<label>Unique Identification Number: </label>
			<div class="w3-section w3-center">
				<button class="w3-button w3-green">Accept</button>
				<button class="w3-button w3-red">Decline</button>
			</div>
		</div>
	</div>
</body>
</html>