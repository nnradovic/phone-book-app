var editime=document.getElementById('editime');
var editprezime = document.getElementById('editprezime');
var editfiksni = document.getElementById('editfiksni');
var editmobilni = document.getElementById('editmobilni');
var id = document.getElementById('id');
var izmeni = document.getElementById('edit');
 console.log(editfiksni.value);
 


var xml = new XMLHttpRequest();

izmeni.addEventListener('click', function(){
    var data = new FormData();
    data.append('id',id.value);
    data.append('editime', editime.value);
    data.append( 'editprezime', editprezime.value);
    data.append('editfiksni', editfiksni.value);
    data.append('editmobilni', editmobilni.value);
	xml.open('POST','editsql.php')
    xml.onreadystatechange = function(){
    	if(xml.readyState == 4 && xml.status == 200){
    		 
    	}
    }

    xml.send(data);
	window.location.replace("index.php");
});
