<!DOCTYPE html>
<html>
<head>
	<title>File Handling</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<div class="container-fluid">
		<div class="container mt-5">
			<div class="form-group">
				<h2>File Handling</h2>
			</div>
			<table class="table table-hover"> 
				<thead>
					<tr>
						<th>Quantity</th>
						<th>Unit</th>
						<th>Description</th>
						<th>Unit Price</th>
						<th>Total Amount</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php include("show.php"); ?>
				</tbody>
			</table>
		<!-- 	<div class="row">
				<div class="col-sm-8"></div>
				<label class="form-control col-sm-1">Subtotal :</label>
				<label class="form-control col-sm-3"><?php  echo "P "; $total = fopen("TOTAL.txt", "r") or die("Cannot read the file"); echo fgets($total); fclose($total); ?></label>
			</div> -->
		</div>
		<?php include("add.php"); ?>

	</div>

	<?php

	 if(isset($_POST["btnOk"])){
	 	$data = fopen("DOCUMENTS.txt", "a") or die("Cannot read the file!");
	 	$quantity = $_POST["txtQuantity"];
	 	$unit = $_POST["txtUnit"];
	 	$unitPrice = $_POST["txtUnitPrice"];
	 	$description = $_POST["txtDescription"];
	 	$totalAmount = $unitPrice * $quantity;
	 	$token = "|";

	 	$dataToWrite = "\n".$quantity.$token.$unit.$token.$description.$token.$unitPrice.$token.$totalAmount.$token;
	 	fwrite($data, $dataToWrite);
	 	fclose($data);
	 	header("Refresh:0; url=index.php");
	 }

	?>
</body>
</html>