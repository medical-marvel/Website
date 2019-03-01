
function Register(str){
	var database = firebase.firestore();
	var inputs = document.getElementsByTagName('input');
	var email= document.getElementById('Email Address').value;
	var password= document.getElementById('Password').value;
	var confirmpassword= document.getElementById('Confirm Password').value;
	if(password!=confirmpassword)
		{
			alert("password and confirm password do not match");
			return;
		}
		for (var i = 0; i < inputs.length; i++) {
			if(!inputs[i].checkValidity())
				{
					var id=inputs[i].id;
					alert(id+" :"+inputs[i].validationMessage);
					return;
				}
			}
			i=0;
			var data={};
			while(i<inputs.length)
			{
				data[inputs[i].id]=inputs[i].value;
				i++;
			}
			//create user
			firebase.auth().createUserWithEmailAndPassword(email, password)
			.then(function(user) {
				firebase.auth().signInWithEmailAndPassword(email, password)
				.then(function(user){
					var user = firebase.auth().currentUser;
					console.log(user);
					
					//add user to database
					database.collection(str).doc(user.uid).set(data)
					.then(function(){
						alert("registered successfully");
						window.location.href= 'Home.php';
						
					})
					
					.catch(function(error) {
						console.log(error)});
					
				})
				.catch(function(error) {
					// Handle Errors here.
					alert("errorcode: "+error.code+"errormessage: "+error.message);
					// ...
				});	
			})
			.catch(function(error) {
				alert("errorcode: "+error.code+"errormessage: "+error.message);
				// ...
			});

			//signin user
			
			// Confirm the link is a sign-in with email link.
/*
var actionCodeSettings = {
  // URL you want to redirect back to. The domain (www.example.com) for this
  // URL must be whitelisted in the Firebase Console.
  url: 'https://www.example.com/finishSignUp?cartId=1234',
  handleCodeInApp: true,
  dynamicLinkDomain: 'example.page.link'
};
firebase.auth().sendSignInLinkToEmail(email, actionCodeSettings)
  .then(function() {
    // The link was successfully sent. Inform the user.
    // Save the email locally so you don't need to ask the user for it again
    // if they open the link on the same device.
    window.localStorage.setItem('emailForSignIn', email);
  })
  .catch(function(error) {
    // Some error occurred, you can inspect the code: error.code
  });
if (firebase.auth().isSignInWithEmailLink(email)) {
    // The client SDK will parse the code from the link for you.
  firebase.auth().signInWithEmailLink(email, window.location.href)
    .then(function(result) {
      var currentuser=result.user;
      userid=currentuser.uid;
    })
    .catch(function(error) {
      // Some error occurred, you can inspect the code: error.code
      // Common errors could be invalid email and invalid or expired OTPs.
      alert(error);
    });
}
*/
}