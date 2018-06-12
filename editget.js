
var xml = new XMLHttpRequest();

xml.open('GET','editget.php');
xml.onreadystatechange = function(){
	if(xml.readyState == 4 && xml.status == 200){
		 console.log(xml.responseText);
	}
}
xml.send();

function getData() {
	var data = JSON.parse(xml.responseText);
	 console.log(data);
}