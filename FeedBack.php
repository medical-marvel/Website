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
		<div class="w3-panel w3-card   try" style="width:350px;height: 400px;margin-left:70px;border-radius: 10px;border: 10px solid #ffffcc;background-color: #34495e;color:white; " ><p>w3-card</p></div>
  		<div class="w3-panel w3-card-2  try" style="width:350px;height: 400px; margin-left:70px;border-radius: 10px;border: 10px solid #ffffcc;background-color: #34495e;color:white;"><p>w3-card-2</p></div>
  		<div class="w3-panel w3-card-2  try" style="width:350px;height: 400px; margin-left:70px;border-radius: 10px;border: 10px solid #ffffcc;background-color: #34495e;color:white;"><p>w3-card-2</p></div>
  	</div>

</body>
</html>