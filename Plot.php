<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">

window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		title:{
			text: "My First Chart in CanvasJS"              
		},
		animationEnabled:true,
		data: [              
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "line",
			dataPoints: [
				{ label: "Insomnia",  y: 10  },
				{ label: "Nausea", y: 15  },
				{ label: "Constipation", y: 25  },
				{ label: "Diarrhea",  y: 30  },
				{ label: "Anxiety",  y: 28  },
				{ label: "Head ache",  y: 45  },
				{ label: "Stomach ache",  y: 30  },
				{ label: "XYZ",  y: 19  },
				{ label: "ABC",  y: 20  }
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