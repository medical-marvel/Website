function Details()
{
	var l=location.href;
	var trial=l.substring(l.indexOf("t=")+2,l.indexOf("+p="));
	var session=l.substring(l.indexOf("+p=")+3);
	console.log(trial);
	console.log(session);
}