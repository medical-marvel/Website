<?php require_once 'header.php'?>
<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/OngoingTrial.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script type="text/javascript">
	</script>
	<style type="text/css">
		label{
			font-size: 20px;
			padding: 10px;
		}
		
	</style>
</head>
<body>
	<h1 style="font-size: 40px;"><center><u>Ongoing Details</u></center></h1>
	<div class="w3-container" >
		<div class="w3-panel w3-card  try" style="margin-left:70px;border-radius: 10px;background-color: #34495e;color:white;display:inline-block;float:left;" >
			<label id="Phase">Phase:</label><br>
			<label id="Status">Status:</label><br>
			<label id="StartingDate">Starting Date:</label><br>
			<label id="Ending_Date">Ending Date:</label><br>
			<label id="No.ofpatient">No.of Patients:</label><br>
			<button class="w3-button w3-blue w3-hover-white"><a href="FeedBack.php">View FeedBack:</a></button>
		</div>
		<div class="w3-panel w3-card  " style="margin-left:70px;border-radius: 10px;background-color: #34495e;color:white;display:inline-block;float:left;">
			<label id="Phase">Phase:</label><br>
			<label id="Status">Status:</label><br> 	
			<label id="StartingDate">Starting Date:</label><br>
			<label id="Ending_Date">Ending Date:</label><br>
			<label id="No.ofpatient">No.of Patients:</label><br>
			<button class="w3-button w3-blue w3-hover-whiteonclick" onclick="document.getElementById('id01').style.display='block'">Complete Phase</button>
		</div>

	</div>
	<div id="id01"  class="w3-modal">
		<div class="w3-modal-content w3-animate-top " style="width:500px;height: 350px;">
			<span onclick="document.getElementById('id01').style.display='none'" 
			class="w3-button w3-display-topright">&times;</span>

			<table id="tab">
				<tr><td colspan="2"><u style="font-size: 30px;width:50%;margin-left: 150px;">PHASE 2 Details</u></td></tr>
				<tr>
					<td>Starting Date</td>
					<td style="text-align:center"><input type="textbox" id="Starting_date" name="s1"></td>
				</tr>
				<tr>
					<td>Ending Date</td>
					<td style="text-align:center"><input type="textbox" id="Ending_date" name="e1"></td>
				</tr>
				<tr>
					<td>No.of Patients</td>
					<td style="text-align:center"><input type="textbox" id="Patients" name="p1"></td>
				</tr>
				<tr class="try" colspan="2">
					<td><button class="w3-button w3-col s4 w3-bar-item w3-button w3-blue w3-round-xxlarge w3-display-center w3-hover-shadow w3-hover-blue w3-text-black" style="width:50%;margin-left: 180px">Submit</button></td>
				</tr>
			</table>

		</div>
	</div>

</body>
</html>