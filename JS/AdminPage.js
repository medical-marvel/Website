
/*Hospital Section*/
function load(){
	setTimeout(loadtrial, 1000);
	setTimeout(loadtrial1,1000);
	setTimeout(loadtrial2,1000);
	setTimeout(loadtrial3,1000);
}
function loadtrial(){

	var i=1;
	var info=document.querySelector("#trialbar");
	var user = firebase.auth().currentUser;
	var database = firebase.firestore();
	var datastored=database.collection("Doctor").get()
	.then(function(data){
		var div = document.createElement("div"); 
		data.forEach(data1 =>{
			i=data1.id;
			but=data1.data();
			Doctor_name=but["Name"];
			var a = document.createElement("a"); 
			var btn = document.createElement("BUTTON");  
			btn.setAttribute('data-id',i);
			btn.setAttribute('data-style',"float:left");
			btn.setAttribute('onclick',"displayinfo('"+i+"')");
			var t = document.createTextNode(Doctor_name);  
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
	var exist=$("#div-"+id);
	$("#trialinfo").html('');
	document.getElementById("try").style.display='block';
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
	var datastored=database.doc("Doctor/"+(id)).get()
	.then((snapshot) => {
		data=snapshot.data();
	header.textContent=data.Name;
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


/*Lab Section*/
function loadtrial1(){

	var i=1;
	var info=document.querySelector("#trialbar1");
	var user = firebase.auth().currentUser;
	var database = firebase.firestore();
	var datastored=database.collection("Lab").get()
	.then(function(data){
		var div = document.createElement("div"); 
		data.forEach(data1 =>{
			i=data1.id;
			but=data1.data();
			Lab_name=but["Name"];
			var a = document.createElement("a"); 
			var btn = document.createElement("BUTTON");  
			btn.setAttribute('data-id',i);
			btn.setAttribute('data-style',"float:left");
			btn.setAttribute('onclick',"displayinfo1('"+i+"')");
			var t = document.createTextNode(Lab_name);  
			btn.appendChild(t);
			a.appendChild(btn);                                // Append the text to <button>
			div.appendChild(a);
			i++;
			
		});
		info.appendChild(div);
		
	});
}
function displayinfo1(id)
{
	var exist=$("#div-"+id);
	$("#trialinfo1").html('');
	document.getElementById("try1").style.display='block';
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
	var datastored=database.doc("Lab/"+(id)).get()
	.then((snapshot) => {
		data=snapshot.data();
	header.textContent=data.Name;
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

/*Patient Section*/

function loadtrial2(){

	var i=1;
	var info=document.querySelector("#trialbar2");
	var user = firebase.auth().currentUser;
	var database = firebase.firestore();
	var datastored=database.collection("Patient").get()
	.then(function(data){
		var div = document.createElement("div"); 
		data.forEach(data1 =>{
			i=data1.id;
			but=data1.data();
			Patient_name=but["Full Name"];
			var a = document.createElement("a"); 
			var btn = document.createElement("BUTTON");  
			btn.setAttribute('data-id',i);
			btn.setAttribute('data-style',"float:left");
			btn.setAttribute('onclick',"displayinfo2('"+i+"')");
			var t = document.createTextNode(Patient_name);  
			btn.appendChild(t);
			a.appendChild(btn);                                // Append the text to <button>
			div.appendChild(a);
			i++;
			
		});
		info.appendChild(div);
		
	});
}
function displayinfo2(id)
{
	var exist=$("#div-"+id);
	$("#trialinfo2").html('');
	document.getElementById("try2").style.display='block';
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
	var datastored=database.doc("Patient/"+(id)).get()
	.then((snapshot) => {
		data=snapshot.data();
	/*header.textContent=data.Full Name;*/
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

/*Trial details*/
function loadtrial3(){

	var i=1;
	var info=document.querySelector("#trialbar3");
	var phase=document.getElementById("phases");
	var user = firebase.auth().currentUser;
	var database = firebase.firestore();
	var datastored=database.collection("Lab/"+user.uid+"/Trial").where("Status", "==", "Ongoing").get()
	.then(function(data){
		var div = document.createElement("div"); 
		data.forEach(data1 =>{
			i=data1.id;
			var a = document.createElement("a"); 
			var btn = document.createElement("BUTTON");  
			btn.setAttribute('data-id',i);
			btn.setAttribute('data-style',"float:left");
			btn.setAttribute('onclick',"displayinfo3('"+i+"')");
			var t = document.createTextNode(i);  
			btn.appendChild(t);
			a.appendChild(btn);                                // Append the text to <button>
			div.appendChild(a);
			i++;
			
		});
		info.appendChild(div);
		
	});
}
function displayinfo3(id)
{
	var exist=$("#div-"+id);
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