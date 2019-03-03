<?php require_once 'header.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>View Feedback</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script type="text/javascript" src="JS/ViewFeedback.js"></script>
<!-- 	<script type="text/javascript">window.onload = function ()
	{
		var chart = new CanvasJS.Chart("LineChartContainer",
		{
			title:
			{
				text: "Overall Phase"
			},
			animationEnabled:true,
			data: [
			{
				type: "line",
			}
		}
	}
</script> -->
</head>
<body>
	<button onclick="Details()">clickme</button>
	<h1><center><u>Lab and Phase Details</u></center></h1>
	<div id="details"></div>
	<div id="LineChartContainer" style="height: 300px; width: 100%;margin-top:100px;"></div>
	<div id="PatientChartContainer" style="height: 300px; width: 100%;margin-top:100px;"></div>
</body>
<script type="text/javascript">Details();</script>
</html>