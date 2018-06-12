<?php 
require 'connect.php';

if(isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['fiksni']) && isset($_POST['mobilni'])){
	$ime=$_POST['ime'];
	$prezime=$_POST['prezime'];
	$fiksni=$_POST['fiksni'];
	$mobilni=$_POST['mobilni'];
	if(!empty($ime) && !empty($prezime) && !empty($fiksni) && !empty($mobilni)){
        $sql="INSERT INTO contacts VALUES (NULL,'$ime','$prezime','$fiksni','$mobilni')";
        $query = mysqli_query($connect,$sql);
        // header('Location: index.php');

      
	}else{
		echo 'Nisu uneso sva polja';
	}


}else{
	echo "Unesi sva polja";
}


 ?>