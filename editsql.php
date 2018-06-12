<?php 
require 'connect.php';

if( isset($_POST['editime']) && isset($_POST['editprezime']) && isset($_POST['editfiksni']) && isset($_POST['editmobilni']) ){
           $id=$_POST['id'];
           // print_r($_POST);
			$ime=$_POST['editime'];
			$prezime=$_POST['editprezime'];
			$fiksni=$_POST['editfiksni'];
			$mobilni=$_POST['editmobilni'];

			if(!empty($ime) && !empty($prezime) && !empty($fiksni) && !empty($mobilni)){

				$sql="UPDATE contacts SET ime='$ime', prezime = '$prezime', fiksni ='$fiksni', mobilni = '$mobilni' WHERE id='$id'";
				$query = mysqli_query($connect,$sql);
				
			}else{
				echo 'Nisu uneo sva polja';
			}
		}else{
			echo 'Morate uneti sva polja';
		}


 ?>