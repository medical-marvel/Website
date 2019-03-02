<?php 
require_once 'Header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function call(){
			//window.location.href=("Login.php");
			var user = firebase.auth().currentUser;
			user.updateProfile({
				displayName: "lab"
			}).then(function(){
				console.log("done");
			})
			console.log(user);
	console.log(user.displayName);
		}
	</script>
</head>
<body >
	<button class="w3-button" onclick="call()">clickme</button>
</body>
</html>