<?php 
require_once 'Header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<script src="JS/OngoingTrials.js"></script>
	<link rel="stylesheet" href="CSS/OngoingTrials.css"> 
</head>
<body onload="load()">
	<h1 style="font-size: 40px;"><center><u>Ongoing Trials</u></center></h1>
	<div id="container">
</div>
<div class=" w3-card-4" id="phases">
</div>
 <button id="addphase" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-blue w3-round w3-center w3-hover-shadow w3-hover-blue w3-text-black">Add New Phase</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Add New Session</h2>
      </header>
      <div class="w3-container">
        <table>
				<tr><th>Starting Trial Date:</th><td><input required class="w3-input" type="Date" id="Starting_Date" name="s1"></td></tr>
				<tr><th>Ending Trial Date:</th><td><input required class="w3-input" type="Date" id="Ending_Date" name="e1"></td></tr>
				<tr><th>No. of Patients :</th><td><input required class="w3-input" type="textbor" id="No. of Patients" name="p1"></td></tr>
				<tr><th>status :</th><td><input required class="w3-input" type="text" id="Status" name="p1"></input></td></tr>

		</table>
        <button id="modalbutton" class="w3-button w3-blue w3-round w3-center w3-hover-shadow w3-hover-blue w3-text-black">Submit</button>
      </div>
    </div>
  </div>
</body>
</html>