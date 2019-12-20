function Details(){
	setTimeout(details,2000);
}
function details()
{
	var data=[];
	var dataPoints=[];
	var l=location.href;
	console.log(l);
	var trial=l.substring((l.indexOf("t=")+2),l.indexOf("+p="));
	var session=l.substring(l.indexOf("+p=")+3);
	var user=firebase.auth().currentUser;/*yash/Feedback/Feedback_1*/
	var database = firebase.firestore();
	var ref=database.collection("Lab/"+user.uid+"/Trial/"+trial+"/Phase/"+session+"/Patient");
	ref.get()
	.then(patients =>{
		patients.forEach(patient =>{
			
			name=patient.id;
			ref=database.collection("Lab/"+user.uid+"/Trial/"+trial+"/Phase/"+session+"/Patient/"+name+"/Feedback");
			ref.get()
			.then(doc =>{
				doc.forEach(insidedoc =>{

					var data1=insidedoc.data();

					var a;
					for(name in data1)
					{
						if(name!="date")
						{
							if(data1[name]=="yes")
							{
								a=1;
							}
							else
							{
								a=0;
							}
							dataPoints.push({
								label: name,
								y: a
							})
						}
					}
				})
				data.push({type: "column",dataPoints});
				dataPoints=[];
				console.log(data);
			}).then(function(){
				var feedback_chart = new CanvasJS.Chart("feedback_chart",
		{
			title:
			{
				text: "Overall Phase"
			},
			animationEnabled:true,
			data
		});
			feedback_chart.render();
		})
		.catch(error =>{
			console.log(error);
						})
		});
		
	})
}