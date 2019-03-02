function load(){
	setTimeout(loadtrial, 2000);
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