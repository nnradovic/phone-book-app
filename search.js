
	
var search = document.querySelector('input[name=searchtext]');
var display = document.getElementById('display');
var tbody =document.getElementsByTagName('tbody')[0];

var xml = new XMLHttpRequest();
search.addEventListener('keyup', function(){
    var data = new FormData();
    data.append('search', search.value);  
    if(search.value.length>2){
    	          
				    xml.open('POST','search.php');
				    xml.onreadystatechange = function(){
				    	if(xml.readyState == 4 && xml.status == 200){
				    		 console.log(xml.responseText);
                           getData();
				    	}
				    }

				   xml.send(data);
                   };



})

function getData(){
	var data = JSON.parse(xml.responseText);
	 var text = '';

		for (var i = 0; i < data.length; i++) {
            text +='<tr class="search">';
			text +='<td><a id="'+i+'"href="index.php">' + data[i].ime + '</a></td>';
			text +='<td><a id="'+i+'"href="index.php">' + data[i].prezime + '</a></td>';
			text +='<td><a id="'+i+'"href="index.php">' + data[i].fiksni + '</a></td>';
			text +='<td><a id="'+i+'"href="index.php">' + data[i].mobilni + '</a></td>';

			text +='</tr>';
			
		}
	
	tbody.innerHTML = text;
 




}







