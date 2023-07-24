<?php
include 'header.php';
?>


<div class="container">
	<div class="row">
		<div class="col-sm-12">
			
			<button class=" btn btn-primary px-3" onclick="openForm()">Add</button>
			<hr>
			<form id="myForm" style="display:none;" action="main_page_insert.php" method="POST">
				<div class="form-group">
					<label class="text-danger fw-bold">Image Width 1600px and Hiegt 900px</label>
					<input type="file" class="form-control"  name="image" accept="image/*" />
				</div>
				<div class="form-group">
					<label for="header">Header:</label>
					<input type="text" class="form-control"  name="header">
				</div>
				<div class="form-group">
					<label >Description::</label>
					<textarea class="summernote" name="description"></textarea>
				</div>
				<button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
				<button type="button" class="btn btn-secondary mt-3" onclick="closeForm()">Close</button>
			</form>
		</div>
	</div>
</div>



<?php
include 'config.php';

// Retrieve data from the main_page table
$sql = "SELECT * FROM main_page";
$result = mysqli_query($conn, $sql);

// Check if any data was returned
if (mysqli_num_rows($result) > 0) {
    // Display the data in an HTML table
    echo '<table>';
    echo '<tr><th>Header</th><th>Description</th><th>Image</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['header'] . '</td>';
        echo '<td>' . $row['description'] . '</td>';
        echo '<td><img src="' . $row['image'] . '"></td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    // Display a message if no data was found
    echo 'No data found';
}

// Close the database connection
mysqli_close($conn);
?>
This code will retrieve all the data from the "main_page" table, display it in an HTML table, and also display the image by using the <img> tag and the URL of the image from the database.

You can modify the code to suit your specific needs, such as adding pagination, filtering, or sorting the data.







<?php
include 'footer.php';
?>