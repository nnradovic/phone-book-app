<?php 
require 'editdelete.php';
require 'connect.php';
$id=$_GET['id'];

 
   $korisnik=mysqli_fetch_assoc($query);
  $id=$korisnik['id'];
   $ime = $korisnik['ime'];
   $prezime = $korisnik['prezime'];
   $fiksni = $korisnik['fiksni'];
   $mobilni = $korisnik['mobilni'];
   
   $sticky[]=[
   'id'=> $id,
   'ime'=> $ime,
   'prezime'=>$prezime,
   'fiksni'=>$fiksni,
   'mobilni'=>$mobilni
   ];


$json_data=json_encode($sticky);


echo $json_data;


 ?>
