<?php 

require 'connect.php';

$sql = "SELECT * FROM contacts";
$query = mysqli_query($connect,$sql);

$data = [];
while($row = mysqli_fetch_assoc($query)){

   $ime = $row['ime'];
   $prezime = $row['prezime'];
   $fiksni = $row['fiksni'];
   $mobilni = $row['mobilni'];


   $data[]=[
   'ime'=>$ime,
   'prezime' =>$prezime,
   'fiksni'=>$fiksni,
   'mobilni' => $mobilni
   ];
}

 $json_encode = json_encode($data);

 echo $json_encode;

 ?>