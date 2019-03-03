function Details()
{
	var l=location.href;
	var trial=l.substring(l.indexOf("t=")+2,l.indexOf("+p="));
	var session=l.substring(l.indexOf("+p=")+3);
	console.log(trial);
	console.log(session);
	var user=firebase.auth().currentUser;/*yash/Feedback/Feedback_1*/
	var database = firebase.firestore();
	database.collection("Lab/"+user.uid+"/Trial/"trial"/Phase/"session"/Patient")
	.then(patients =>{
		patients.forEach(patient =>{
			console.log(patient);
		})
	})
}