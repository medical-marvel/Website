function Details(){
	setTimeout(details,2000);
}
function details()
{
	var data=[];
	var date;
	var dataDict={};
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
					date=data1["date"];
					for(name in data1)
					{
						if(name!="date")
						{
							if (!(name in dataDict))
							{
								dataDict[name]=0;
							}
							if(data1[name]=="yes")
							{
								dataDict[name]+=1;
							}
						}
					}
				})
				for(key in dataDict)
				{
					dataPoints.push({
						label: key,
						y: dataDict[key]
					})
				}
				data.push({type:"column", name: date, showInLegend:true, dataPoints});
				dataPoints=[];
				dataDict={};
				console.log(data);
			})
			.then(function(){
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
				$("#container").css("display","block");
		$("#load").css("display","none");
			})
			.catch(error =>{
				console.log(error);
			})
		});
	})
}