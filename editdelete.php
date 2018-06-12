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
			     <table class="table">
					<h3>Brisanje i izmena korisnika</h3>
			     	<thead>
			     		<tr>
			     			<th>Ime</th>
			     			<th>Prezime</th>
			     			<th>Fiksni telefon</th>
			     			<th>Mobilni telefon</th>
			     		</tr>
			     	</thead> 

                    <tbody>
                    	<?php  
                    	while($row = mysqli_fetch_assoc($query)){
						$id=$row['id'];
						$ime=$row['ime'];
						$prezime=$row['prezime'];
						$fiksni=$row['fiksni'];
						$mobilni=$row['mobilni'];
						?>
                         <tr>

                         	<td><?php echo $ime ?></td>
                         	<td><?php echo $prezime ?></td>
                         	<td><?php echo $fiksni ?></td>
                         	<td><?php echo $mobilni ?></td>
                         	<td><button  class="btn btn-danger"><a href="deletesql.php?id=<?php echo $id ?>">Obrisi</a></button></td>
                            <td><button id="editacc" class="btn btn-warning"><a href="edit.php?id=<?php echo $id ?>">Izmeni</a></button></td>
                         </tr>
						<?php 
                        }
						 ?>

                    </tbody>
			     </table>
		        </div>
	         </div> 
		</div>
	</div> 
</div>
<script src="editget.js"></script>