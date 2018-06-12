var tbody = document.getElementsByTagName('tbody')[0];

var xml = new XMLHttpRequest();

xml.open('GET','indexsql.php');
xml.onreadystatechange = function(){
	if(xml.readyState == 4 && xml.status == 200){
		getData();
	}
}
xml.send();


function getData(){
   var data  = JSON.parse(xml.responseText);
   console.log(data);
   
   var text = '';
   for (var i = 0; i < data.length; i++) {
     text +='<tr>';
     text += '<td>'+data[i].ime+'</td>';
     text += '<td>'+data[i].prezime+'</td>';
     text += '<td>'+data[i].fiksni+'</td>';
     text += '<td>'+data[i].mobilni+'</td>';
     text += '</tr>';
   }

   tbody.innerHTML=text;
 
}