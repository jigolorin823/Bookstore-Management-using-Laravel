<div class="container mt-5 mb-5 ">
	<form method="POST" action="index.php">
		<div class="mt-5 mb-5 bg-info jumbotron">
			<h3 class="mb-5">Add New Item</h3>
			Quantity
			<input type="number" name="txtQuantity" class="form-control" placeholder="Quantity" required="true">
			Unit
			<input type="text" name="txtUnit" class="form-control" placeholder="Unit" required="true">
			Description
			<input type="text" name="txtDescription" class="form-control" placeholder="Description" required="true">
			Unit Price
			<input type="number" name="txtUnitPrice" class="form-control" placeholder="Unit Price" required="true">
			<button type="submit" name="btnOk" class="btnConfirmPopup btn btn-success mt-2">Confirm</button>
		</div>
	</form>
</div>