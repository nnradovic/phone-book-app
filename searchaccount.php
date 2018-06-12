<?php 
require 'header.php';
require 'connect.php';
$sql = "SELECT * FROM contacts";
$query = mysqli_query($connect,$sql);

 ?>
<link rel="stylesheet" href="search.css">
<link rel="stylesheet" href="https://cdn.rawgit.com/LeaVerou/awesomplete/gh-pages/awesomplete.css
">
<div class="container-fluid">
	<div class="text-center">
		<div class="row">
			<div class="col-4 offset-4">
				
				<input id="myinput" type="text" name ="searchtext" class="form-control awesomplete" style="margin-bottom:20px" >
	           
	            
			</div>
		</div>
    </div>
    <div class="container-fluid">
	<div class="row">
		<div class="col-8 offset-2">
			
			     <table class="table table-hover">
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

				
 <script src="
https://cdn.rawgit.com/LeaVerou/awesomplete/gh-pages/awesomplete.min.js
"></script>
	<script src="search.js"></script>