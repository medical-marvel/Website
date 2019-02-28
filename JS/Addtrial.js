
function Addtrial() {
	var inputs = document.getElementsByTagName('input');
	for (var i = 0; i < inputs.length; i++) {
		if(!inputs[i].checkValidity())
		{
        		alert(inputs[i].validationMessage);
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
	var user = firebase.auth().currentUser;
	console.log(data);

	

  	writeUserData(user,data);

}
function writeUserData(user,data) {
var database = firebase.firestore();
var i=0;
	var cityRef = database.collection("Lab").doc(user.uid).collection("Trial");
	 cityRef.get().then(function(result){
	i=result.size;
	i=i+1;
 database.collection("Lab").doc(user.uid).collection("Trial").doc("Trial_"+i).set(data).then(function() {
    console.log("Document successfully written!")});
	});
}
