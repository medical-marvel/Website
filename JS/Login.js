function loginuser(){

 var inputs = document.getElementsByTagName('input');
for (var i = 0; i < inputs.length; i++) {
    if(!inputs[i].checkValidity())
      {
        var id=inputs[i].id;
        alert(id+" :"+inputs[i].validationMessage);
        return;

        //alert(inputs[i].validationMessage);
      }
}
  var userEmail = document.getElementById("username").value;
  var userPass = document.getElementById("password").value;
  firebase.auth().signInWithEmailAndPassword(userEmail, userPass)
    .then(function(user){
       var user = firebase.auth().currentUser;
       document.cookie="$uid="+user.uid;
       window.location.href= 'Home.php';
    })
    .catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;

    window.alert("Error : " + errorMessage);

    // ...
  });

}
firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    


    if(user != null){
      var email_id = user.email;
      console.log("Welcome User : " + email_id);
      console.log(user.uid);
    }
  } else {
    // No user is signed in.
    console.log(user);
  }
});

