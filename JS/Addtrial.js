
function Addtrial() {
	var age = document.getElementById("age");
	console.log(age);
	var inputs = document.getElementsByTagName('input');
	for (var i = 0; i < inputs.length; i++) {
		if(!inputs[i].checkValidity())
		{
        		alert(inputs[i].validationMessage);
        		return;
		}
	}
	i=0;
	//inputs of trial section
	var trialinputs=document.getElementById('Trial_details').getElementsByTagName('input');
	var trialtext=document.getElementById('Trial_details').getElementsByTagName('textarea');
	//inputs of phase section

	var side_effects=document.getElementById('side_effects').getElementsByTagName('input');
	console.log(side_effects)
	var trialdata={};
			while(i<trialinputs.length)
			{
				trialdata[trialinputs[i].id]=trialinputs[i].value;
				i++;
			}
			i=0;
			while(i<trialtext.length)
			{
				trialdata[trialtext[i].id]=trialtext[i].value;
				i++;
			}
	i=0;
	var effectdata={};
			while(i<side_effects.length)
			{
				effectdata[side_effects[i].id]=side_effects[i].value;
				i++;
			}		
console.log(trialdata);
console.log(effectdata);
	var user = firebase.auth().currentUser;
  	writeUserData(user,trialdata,effectdata);

}
function writeUserData(user,trialdata,effectdata) {
	var database = firebase.firestore();
	var i=0;
	var cityRef = database.collection("Lab").doc(user.uid).collection("Trial");
	cityRef.get().then(function(result){
		i=result.size;
		i=i+1;
		database.doc("Lab/"+user.uid+"/Trial/Trial_"+i).set(trialdata);
			console.log(effectdata);
			database.doc("Lab/"+user.uid+"/Trial/Trial_"+i+"/SideEffect/SideEffect_1").set(effectdata).then(function() {
				console.log("Document successfully written!");
				window.location.href="LabMain.php";
			});
			
		});



}
