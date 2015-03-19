var x;
var username;
if (window.XMLHttpRequest) { 
	x= new XMLHttpRequest();
} else {
	x = new ActiveXObject("Microsoft.XMLHTTP"); 
}

try {
	x.open('GET','/dvwa/',false);
	x.setRequestHeader("Connection", "close");
	x.send();	
	var mainContent = x.responseText;
	var begin = mainContent.indexOf("[");
	var end = mainContent.indexOf("]");
	username = mainContent.substring(begin+1, end);
} catch (e) {
	alert("faile to create  XMLHttpRequest");
} 




