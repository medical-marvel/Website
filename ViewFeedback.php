<?php require_once 'header.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>View Feedback</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script type="text/javascript" src="JS/ViewFeedback.js"></script>
</head>
<body onload="Details()">
	
	<h1><center><u>Lab and Phase Details</u></center></h1>
	<div id="load" >
<div class="loader"></div>
</div>
	<div id="container" style="display: none">
	<div id="details"></div>
	<div id="feedback_chart" style="height: 300px; width: 100%;margin-top:100px;"></div>
	<div id="patient_chart" style="height: 300px; width: 100%;margin-top:100px;"></div>
	</div>
</body>
</html>