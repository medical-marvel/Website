<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script type="text/javascript">

		window.onload = function () {
			var chart = new CanvasJS.Chart("chartContainer", {
				title:{
					text: "3 weeks patient feedbacks"
				},
				animationEnabled:true,
				data: [
				{
					type: "line",
					dataPoints:
					[
					{label: "Insomnia", y: 10},
					{label: "Nausea", y: 15},
					{label: "Constipation", y: 25},
					{label: "Diarrhea", y: 30},
					{label: "Anxiety", y: 28},
					{label: "Head ache", y: 45},
					{label: "Stomach ache", y: 30},
					{label: "XYZ", y: 19},
					{label: "ABC", y: 20}
					]
				},
				{
					type: "line",
					dataPoints:
					[
					{label: "Insomnia", y: 20},
					{label: "Nausea", y: 5},
					{label: "Constipation",y: 12},
					{label: "Diarrhea", y: 10},
					{label: "Anxiety", y: 35},
					{label: "Head ache", y: 25},
					{label: "Stomach ache", y: 30},
					{label: "XYZ", y: 17},
					{label: "ABC", y: 24}
					]
				},
				{
					type: "line",
					dataPoints:
					[
					{label: "Insomnia", y: 10},
					{label: "Nausea", y: 2},
					{label: "Constipation",y: 11},
					{label: "Diarrhea", y: 19},
					{label: "Anxiety", y: 15},
					{label: "Head ache", y: 35},
					{label: "Stomach ache", y: 3},
					{label: "XYZ", y: 17},
					{label: "ABC", y: 24}
					]
				}
				]
			});
			chart.render();
		}
	</script>
</head>
<body>
	<div id="chartContainer" style="height: 300px; width: 100%;margin-top:100px;"></div>
</body>
</html>