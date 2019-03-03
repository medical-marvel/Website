<?php require_once 'header.php'?>
<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/AddTrial.css">
	<script src="JS/AddTrial.js">
		function myfunction(){
			alert("If you dont provide insurance, your Medical Trial will be least Recommended.");
		}
	</script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
</head>
<body>
	<h1><center><u>New Trials Details</u></center></h1>
	<div class="try">
		<div id="Trial_details">
			<table>
				<tr><th>Medicine Name</th><td><input required class="w3-input" type="textbox" id="Medicine_name" name="m1"></td></tr>
				 <tr><th>Status</th><td><input required class="w3-input" type="textbox" id="Status" name="p1"></td></tr> 
				<tr><th>Purpose</th><td><input required class="w3-input" type="textbox" id="Purpose" name="p1"></td></tr>
				<!-- <tr><th>Specific Treatments</th><td><textarea id="Specific_treatment" maxlength="1000" rows="2" cols="10"></textarea></td></tr> -->
				<tr><th>Age Group<br><label style="color: rgba(0,0,0,0.4);font-size: 12px">(0:Child,1:Adult,2:Old)</label></th><td><input type="text" name="age" id="Age"class="w3-input"></td></tr>
				<tr><th>Allergies </th><td><input required class="w3-input" id="Allergies"></td></tr>
				<!-- <tr><th>Recommended </th><td> <textarea required rows="2" id="Recommended" cols="10"></textarea></td></tr> -->
				<tr><th>Not Recommended</th><td><input required class="w3-input" id="Not_recomended"></td></tr>
				<tr><th>Number of Patients</th><td><input required class="w3-input" type="textbox" id="Patient_no" name="p1"></td></tr>
<!-- 				<tr><th>WARNINGS AND PRECAUTIONS</th><td><textarea required rows="2" id="Warnings"  cols="10"></textarea></td></tr>
				<tr><th>Do you have any Insurance ?</th><td><input required  type="radio" id="Insurance" name="n1" value="yes">Yes&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" id="insurance"  name="n1" value="no">No</td></tr>
				<tr><th>Insurance Number </th><td> <input reqiured class="w3-input" type="text" id="Insurance_no" name="i1"></td></tr> -->
			</table>
		</div>
		 <div id="Phase_details" style="margin-top: 10px">
			<h1><center><u>Session 1 Details</u></center></h1>
			<table>
				<tr><th>Starting Trial Date:</th><td><input required class="w3-input" type="Date" id="Starting_Date" name="s1"></td></tr>
				<tr><th>Ending Trial Date:</th><td><input required class="w3-input" type="Date" id="Ending_Date" name="e1"></td></tr>
				<tr><th>No. of Patients :</th><td><input required class="w3-input" type="textbor" id="No. of Patients" name="p1"></td></tr>
				<tr><th>status :</th><td><input required class="w3-input" type="textbor" id="Status" name="p1"></td></tr>

		</table>
		</div> 
		<div class="w3-center">
		<button style="margin-top: 10px;margin-bottom: 10px; " class=" w3-button w3-col s4 w3-bar-item w3-button w3-blue w3-round-xxlarge w3-display-center w3-hover-shadow w3-hover-blue w3-text-black" id="Addtrial" onclick="Addtrial()" style="width:100px;">Submit</button>
	</div>
	</div>
</body>
</html>