<?php 
require_once 'Header.php';
?>

<!DOCTYPE html>
<html>
<head>
	
	<script>
		function getDisease()
		{
			var a=document.getElementById("med").value;
			var req=new XMLHttpRequest();
			req.open('GET',"Details.php?q="+a,true);
			req.onreadystatechange=function(){
				if(this.readyState==4 && this.status==200)
				{
					document.getElementById("unique").innerHTML=this.responseText;
				}
			}
			req.send();
			var user = firebase.auth().currentUser;
			console.log(user.uid);
		}
		var user = firebase.auth().currentUser;
			console.log(document.cookie);
	</script>
</head>
<body>
	<!-- Header section -->
	<H1>PREVIOUS TRIALS DETAILS</H1>
	<form>
		Enter the DISEASE name:
		<input type="text"  name="n1" id="med"><br>
		<input type="button" name="b1" value="Submit" onclick="getDisease()">
	</form>
	<div id="unique">
	</div>
	<!-- Footer section -->
	<div class="footer">
		&copy:2019 by Medical Marvel Developer
	</div>
</body>
</html>