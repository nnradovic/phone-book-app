<?php 
require 'header.php';
require 'connect.php';

$sql = "SELECT * FROM contacts";
$query = mysqli_query($connect,$sql);
 ?>


<div class="container-fluid">
	<div class="row">
		<div class="col-8 offset-2">
			<div class="row">
		        <div class="col-10 offset-1">
			     <table class="table table-hover">
			       <h3>Lista kontakata</h3>
			     	<thead>
			     		<tr>
			     			<th>Ime</th>
			     			<th>Prezime</th>
			     			<th>Fiksni telefon</th>
			     			<th>Mobilni telefon</th>
			     		</tr>
			     	</thead> 

                    <tbody>
                    
                    </tbody>
			     </table>
		        </div>
	         </div> 
		</div>
	</div> 
</div>
<script src="index.js"></script>