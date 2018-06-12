/// INSERT USER ////

var ime = document.getElementById('ime');
var prezime = document.getElementById('prezime');
var fiksni = document.getElementById('fiksni');
var mobilni = document.getElementById('mobilni');
var dodaj = document.getElementById('insert');
console.log(fiksni.value);
var xml = new XMLHttpRequest();

dodaj.addEventListener('click', function(){
    var data = new FormData();
    data.append('ime', ime.value);
    data.append( 'prezime', prezime.value);
    data.append('fiksni', fiksni.value);
    data.append('mobilni', mobilni.value);
	xml.open('POST','insertsql.php')
    xml.onreadystatechange = function(){
    	if(xml.readyState == 4 && xml.status == 200){
    		 
    	}
    }

    xml.send(data);
    window.location.replace("index.php");
	
});




