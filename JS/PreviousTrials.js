
function loadtrial(){
	var i=1;
	var info=document.querySelector("#trialbar");
	var phase=document.getElementById("phases");
	var user = firebase.auth().currentUser;
	var database = firebase.firestore();
	console.log(user);
	var datastored=database.collection("Lab/"+user.uid+"/Trial").get()
	.then(function(data){
		var size=data.size;
		console.log(size);
		var div = document.createElement("div"); 
		while(i<=size)
		{
			var a = document.createElement("a"); 
			var btn = document.createElement("BUTTON");  
			btn.setAttribute('data-id',"Trial_"+i);
			btn.setAttribute('data-style',"float:left");
			btn.setAttribute('onclick',"displayinfo('Trial_"+i+"')");
			var t = document.createTextNode("Trial_"+i);  
			btn.appendChild(t);
			a.appendChild(btn);                                // Append the text to <button>
			div.appendChild(a);
			i++;
		}
		info.appendChild(div); 
	});
}
function displayinfo(id)
{
	var info=document.querySelector("#trialinfo");
	var header = document.createElement("h4"); 

	var user = firebase.auth().currentUser;
	var database = firebase.firestore();
	console.log(id);
	header.textContent=id;
	info.appendChild(header);
	var datastored=database.doc("Lab/"+user.uid+"/Trial/"+(id)).get()
	.then((snapshot) => {
		console.log(snapshot.data());
		data=snapshot.data();
		console.log(data.status);
		//creating html 
		var ul = document.createElement("ul");
		for(name in data){
			console.log(name);
			console.log(data[name]);
			var li = document.createElement("li"); 
			var p1 = document.createElement("label"); 
			var p2 = document.createElement("label");
			p1.setAttribute("data-style","float:left");
			p2.setAttribute("data-style","float:left"); 
			li.setAttribute("data-id",data[name]);
			p1.textContent=name+"  :";
			p2.textContent=data[name];
			li.appendChild(p1);
			li.appendChild(p2);
			ul.appendChild(li);
		}
		info.appendChild(ul);
	});
}