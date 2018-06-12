<?php 
require 'header.php';
require 'connect.php';
$id=$_GET['id'];
// echo $id;
$sql="SELECT * FROM contacts WHERE id='$id'";
$query=mysqli_query($connect,$sql);
$korisnik=mysqli_fetch_assoc($query);

   $ime = $korisnik['ime'];
   $prezime = $korisnik['prezime'];
   $fiksni = $korisnik['fiksni'];
   $mobilni = $korisnik['mobilni'];

 ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-8 offset-2" >
			<div class="row">
			    <div class="col-6 offset-3" >
			        <h3>Izmena kontakt</h3>
				  <!-- <form action="edit.php" method="POST"> -->
				  	<input type="text" id="id" name="id" style="display:none" value="<?php echo $id ?>">
				  	<input type="text" id="editime" name="editime" placeholder="Unesi ime" value="<?php echo $ime ?>" class="form-control"><br>
				  	<input type="text" id="editprezime" name="editprezime" placeholder="Unesi prezime " value="<?php echo $prezime ?>" class="form-control"><br>
				  	<input type="text" id="editfiksni" name="editfiksni" placeholder="Fiksni telefon" value="<?php echo $fiksni  ?>" class="form-control"><br>
				  	<input type="text" id="editmobilni" name="editmobilni" placeholder="Mobilni telefon" value="<?php echo $mobilni ?>" class="form-control"><br>
				  	<input type="submit" id="edit" name="editinsert"   class="form-control btn btn-primary" value="Posalji"><br>
				  <!-- </form> -->
			    </div>
	        </div>
		</div>
	</div>
</div>
<script src="edit.js"></script>
