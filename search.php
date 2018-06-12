<?php 

require 'connect.php';
// require 'searchaccount.php';


$search = $_POST['search'];  
$sql="SELECT * FROM contacts WHERE ime  LIKE '%$search%' OR  prezime  LIKE '%$search%' OR  fiksni  LIKE '%$search%' OR  mobilni  LIKE '%$search%' ";
$query = mysqli_query($connect, $sql);
	       
$arr=[];
while($row=mysqli_fetch_assoc($query)){
	$arr[]=[
    'ime' => $row['ime'],
    'prezime' => $row['prezime'],
    'fiksni' => $row['fiksni'],
    'mobilni' => $row['mobilni']
	];
}

echo json_encode($arr);


 ?>


