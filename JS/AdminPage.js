function load(){
	setTimeout(loadtrial, 1000);
	setTimeout(loadtrial1,1000);
	setTimeout(loadtrial2,1000);
	setTimeout(loadtrial3,1000);
}
/*Doctor*/
function loadtrial(){

	var i=1;
	/*
	var phase=document.getElementById("phases");*/
	var info=document.querySelector("#trialbar");
	var user = firebase.auth().currentUser;
	var database = firebase.firestore();
	var datastored=database.collection("Doctor").get()
	.then(function(data){
		var div = document.createElement("div"); 
		data.forEach(data1 =>{
			i=data1.id;
			but=data1.data();
			var dname=but.id;
			console.log(dname);/*
			var a = document.createElement("a"); 
			var btn = document.createElement("BUTTON");  
			btn.setAttribute('data-id',i);
			btn.setAttribute('data-style',"float:left");
			btn.setAttribute('onclick',1"displayinfo('"+i+"')");
			var t = document.createTextNode(i);  
			btn.appendChild(t);
			a.appendChild(btn);                                // Append the text to <button>
			div.appendChild(a);*/
			var optn= document.createElement("option");
			optn.setAttribute("data-id",dname);
			optn.setAttribute("value",but["Name"]); 
			optn.textContent=dname;
			info.appendChild(optn);
		});
		
		
	});
}
function displayinfo()
{
	var id=document.getElementById("trialbar").value;
	console.log(id);
	$("#trialinfo").html('');
	document.getElementById("try").style.display="block";
	var exist=$("#div-"+id);
	if(exist.length!=0){
		return;
	}
	var info=document.querySelector("#trialinfo");
	var header = document.createElement("h4"); 
	var div = document.createElement("div");
	div.setAttribute("data-id",id);
	div.setAttribute("id","div-"+id);
	var user = firebase.auth().currentUser;
	var database = firebase.firestore();
	console.log(id);
	var datastored=database.doc("Doctor/"+(id)).get()
	.then((snapshot) => {
		console.log(snapshot);
		data=snapshot.data();
		console.log(data);
		header.textContent=data["Name"];
		div.appendChild(header);
		//creating html 
		var ul = document.createElement("ul");
		for(name in data){		
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

/*Lab*/
function loadtrial1(){

	var i=1;
	/*
	var phase=document.getElementById("phases");*/
	var info=document.querySelector("#trialbar1");
	var user = firebase.auth().currentUser;
	var database = firebase.firestore();
	var datastored=database.collection("Lab").get()
	.then(function(data){
		var div = document.createElement("div"); 
		data.forEach(data1 =>{
			i=data1.id;
			console.log(i);
			var optn= document.createElement("option");
			optn.setAttribute("data-id",i);
			optn.setAttribute("value",i); 
			optn.textContent=data1["Name"];
			info.appendChild(optn);
		});
		
		
	});
}
function displayinfo1()
{
	var id=document.getElementById("trialbar1").value;
	$("#trialinfo1").html('');
	document.getElementById("try1").style.display="block";
	var exist=$("#div-"+id);
	if(exist.length!=0){
		return;
	}
	var info=document.querySelector("#trialinfo1");
	var header = document.createElement("h4"); 
	var div = document.createElement("div");
	div.setAttribute("data-id",id);
	div.setAttribute("id","div-"+id);
	var user = firebase.auth().currentUser;
	var database = firebase.firestore();
	header.textContent=id;
	div.appendChild(header);
	var datastored=database.doc("Lab/"+(id)).get()
	.then((snapshot) => {
		data=snapshot.data();
		//creating html 
		var ul = document.createElement("ul");
		for(name in data){		
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
/*Patient*/
function loadtrial2(){

	var i=1;
	/*
	var phase=document.getElementById("phases");*/
	var info=document.querySelector("#trialbar2");
	var user = firebase.auth().currentUser;
	var database = firebase.firestore();
	var datastored=database.collection("Patient").get()
	.then(function(data){
		var div = document.createElement("div"); 
		data.forEach(data1 =>{
			i=data1.id;
			console.log(i);/*
			var a = document.createElement("a"); 
			var btn = document.createElement("BUTTON");  
			btn.setAttribute('data-id',i);
			btn.setAttribute('data-style',"float:left");
			btn.setAttribute('onclick',"displayinfo('"+i+"')");
			var t = document.createTextNode(i);  
			btn.appendChild(t);
			a.appendChild(btn);                                // Append the text to <button>
			div.appendChild(a);*/
			var optn= document.createElement("option");
			optn.setAttribute("data-id",i);
			optn.setAttribute("value",i); 
			optn.textContent=i;
			info.appendChild(optn);
		});
		
		
	});
}
function displayinfo2()
{
	var id=document.getElementById("trialbar2").value;
	$("#trialinfo2").html('');
	document.getElementById("try2").style.display="block";
	var exist=$("#div-"+id);
	if(exist.length!=0){
		return;
	}
	var info=document.querySelector("#trialinfo2");
	var header = document.createElement("h4"); 
	var div = document.createElement("div");
	div.setAttribute("data-id",id);
	div.setAttribute("id","div-"+id);
	var user = firebase.auth().currentUser;
	var database = firebase.firestore();
	header.textContent=id;
	div.appendChild(header);
	var datastored=database.doc("Patient/"+(id)).get()
	.then((snapshot) => {
		data=snapshot.data();
		//creating html 
		var ul = document.createElement("ul");
		for(name in data){		
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
/*Trial*/
function loadtrial3(){

	var i=1;
	/*
	var phase=document.getElementById("phases");*/
	var info=document.querySelector("#trialbar3");
	var user = firebase.auth().currentUser;
	var database = firebase.firestore();
	var datastored=database.collection("Lab/"+user.uid+"/Trial").where("Status", "==", "Ongoing").get()
	.then(function(data){
		var div = document.createElement("div"); 
		data.forEach(data1 =>{
			i=data1.id;
			console.log(i);/*
			var a = document.createElement("a"); 
			var btn = document.createElement("BUTTON");  
			btn.setAttribute('data-id',i);
			btn.setAttribute('data-style',"float:left");
			btn.setAttribute('onclick',"displayinfo('"+i+"')");
			var t = document.createTextNode(i);  
			btn.appendChild(t);
			a.appendChild(btn);                                // Append the text to <button>
			div.appendChild(a);*/
			var optn= document.createElement("option");
			optn.setAttribute("data-id",i);
			optn.setAttribute("value",i); 
			optn.textContent=i;
			info.appendChild(optn);
		});
		
		
	});
}
function displayinfo3()
{
	var id=document.getElementById("trialbar3").value;
	var exist=$("#div-"+id);
	$("#trialinfo3").html('');
	document.getElementById("try3").style.display="block";
	if(exist.length!=0){
		return;
	}
	var info=document.querySelector("#trialinfo3");
	var header = document.createElement("h4"); 
	var div = document.createElement("div");
	div.setAttribute("data-id",id);
	div.setAttribute("id","div-"+id);
	var user = firebase.auth().currentUser;
	var database = firebase.firestore();
	header.textContent=id;
	div.appendChild(header);
	var datastored=database.doc("Lab/"+user.uid+"/Trial/"+(id)).get()
	.then((snapshot) => {
		data=snapshot.data();
		//creating html 
		var ul = document.createElement("ul");
		for(name in data){		
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
