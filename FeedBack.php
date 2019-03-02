<?php require_once 'Header.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
	.try{
		-webkit-transition:0.3s ease-in-out,-webkit-transition 0.3s ease-in-out;
		-moz-transition: 0.3s ease-in-out,-moz-transition:0.3s ease-in-out;
		transition: 0.3s ease-in-out,transition 0.3s ease-in-out;
	}
	.try:hover{
	transform: scale(1.05);
	}

</style>
</head>
<body>
	<div style="width:100%;height:50px;background-color: pink;margin-top: 10px;border-radius: 5px;">
		<label id="lab_name">Lab Name</label>
		<label id="Trial_name">Trial name</label>
		<label id="Phase">Phase</label>
		<label id="Date">Date</label>
	</div>
		<div class="w3-container" style="display:inline-flex;">
		<div class="w3-panel w3-card   try" style="width:350px;height: 500px;margin-left:70px;border-radius: 10px;border: 10px solid #ffffcc;background-color: #34495e;color:white; " >
			<h1 style="color:red;"><u>FeedBack</u></h1><ol><li>
			<b>Patient Name:</b></b><label id="Patient_name"></label><br></li>
			<li><b>Improvement since last Feedback:</b><select><option>Excellent</option><option>Good</option><option>poor</option></select><br></li>
			<li><b>OverAll Condition</b> <select><option>Stable</option><option>Not stable</option></select><br></li>
			<li><b>Are you happy with our service:</b><label>Yes</label></li>
			<li><b>Problem Faced physically by you while consuming medicine?If yes elloborate here</b><br>
			<textarea rows="2" column="50"placeholder="Write here.."></textarea><br></li>
			<li><b>Any Suggestions regarding our Services?</b><br>
			<textarea rows="2" column="50" placeholder="Write here.."></textarea></li>
		</div>
  		<div class="w3-panel w3-card-2  try" style="width:350px;height: 400px; margin-left:70px;border-radius: 10px;border: 10px solid #ffffcc;background-color: #34495e;color:white;"><p>w3-card-2</p></div>
  		<div class="w3-panel w3-card-2  try" style="width:350px;height: 400px; margin-left:70px;border-radius: 10px;border: 10px solid #ffffcc;background-color: #34495e;color:white;"><p>w3-card-2</p></div>
  	</div>

</body>
</html>