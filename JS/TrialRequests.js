function myfunction()
{
	var user=firebase.auth().currentUser;
	var database = firebase.firestore();
	var i=0;
	var cityRef = database.collection("Lab").doc(user.uid).collection("Trial").doc("").collection("Phase").doc().collection("Patient");
	cityRef.get().then(function(result){
		var status=result.Approval
		database.doc("Lab/"+user.uid+"/Trial/Trial_"+i+"/Phase/Phase_"++"/Patient/"+user.uid).update(Approval).value
		("Approved");
		console.log(phasedata);
	});

}