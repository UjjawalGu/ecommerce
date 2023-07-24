<?php
include 'header.php';
?>


<div class="container">
	<div class="row">
		<div class="col-sm-12">
			
			<button class=" btn btn-primary px-3" onclick="openForm()">Add</button>
			<hr>
			<form id="myForm" style="display:none;">
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				</div>
				<div class="form-group">
					<label for="phone">Phone:</label>
					<input type="tel" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
				</div>
				<button type="submit" class="btn btn-primary mt-3">Submit</button>
				<button type="button" class="btn btn-secondary mt-3" onclick="closeForm()">Close</button>
			</form>
		</div>
	</div>
</div>





<?php
include 'footer.php';
?>