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
	<h1 style="font-size: 40px;"><center><u>Previous trials</u></center></h1>
	<div id="load" >
<div class="loader"></div>
</div>
	<div id="trialnav"  style="display: none;">
		<select id="trialbar" onchange="displayinfo()" style="height: 50px;">
  <option value="volvo" disabled selected="selected">Select Trial
</select>
</div>
<div class=" w3-card-4" id="trialinfo" >
</div>
<button class="w3-button"></button>
</body>
</html>