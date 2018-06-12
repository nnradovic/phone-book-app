<?php 
require 'header.php';
 ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-8 offset-2" >
			<div class="row">
			    <div class="col-6 offset-3" >
		      	<h3>Dodaj novi kontakt</h3>
				  <!-- <form action="insert.php" method="POST"> -->
				  	<input id="ime" type="text" name="ime" placeholder="Unesi ime " class="form-control"><br>
				  	<input id="prezime" type="text" name="prezime" placeholder="Unesi prezime " class="form-control"><br>
				  	<input id="fiksni" type="text" name="fiksni" placeholder="Fiksni telefon" class="form-control"><br>
				  	<input id="mobilni" type="text" name="mobilni" placeholder="Mobilni telefon" class="form-control"><br>
				  	<input id="insert" type="submit" name="insert"  class="form-control btn btn-primary" value="Posalji"><br>
				  <!-- </form> -->
			    </div>
	        </div>
		</div>
	</div>
</div>
<script src="insert.js"></script>