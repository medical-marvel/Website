<?php 
require_once 'Header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<script src="JS/PreviousTrials.js"></script>
	<link rel="stylesheet" href="CSS/PreviousTrials.css"> 
</head>
<body onload="load()">
	<div id="trialnav" class="w3-card-4">
		<select id="trialbar" onchange="displayinfo()">
  <option value="volvo" disabled>Select Trial
</select>
</div>
<div class=" w3-card-4" id="trialinfo" >
</div>
</body>
</html>