function load(){
	setTimeout(loadtrial, 2000);
}
function loadtrial(){

	var i=1;
	var info=document.querySelector("#trialbar");
	var phase=document.getElementById("phases");
	var user = firebase.auth().currentUser;
	var database = firebase.firestore();
	var datastored=database.collection("Lab/"+user.uid+"/Trial").where("Status", "==", "Completed").get()
	.then(function(data){
		var div = document.createElement("div"); 
		data.forEach(data1 =>{
			i=data1.id;
			var a = document.createElement("a"); 
			var btn = document.createElement("BUTTON");  
			btn.setAttribute('data-id',i);
			btn.setAttribute('data-style',"float:left");
			btn.setAttribute('onclick',"displayinfo('"+i+"')");
			var t = document.createTextNode(i);  
			btn.appendChild(t);
			a.appendChild(btn);                                // Append the text to <button>
			div.appendChild(a);
			i++;
			
		});
		info.appendChild(div);
		
	});
}
function displayinfo(id)
{
	var exists=$(this).attr(id);
	if(exists!=null){
		return;
	}
	var info=document.querySelector("#trialinfo");
	var header = document.createElement("h4"); 
	var div = document.createElement("div");
	div.setAttribute("data-id","div-"+id);
	var user = firebase.auth().currentUser;
	var database = firebase.firestore();
	console.log(id);
	header.textContent=id;
	div.appendChild(header);
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
		div.appendChild(ul);
		info.appendChild(div);
	});
}