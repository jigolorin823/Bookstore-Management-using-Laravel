<?php
//Names: 
//Jigo Lorin
//MJ Mamuntuan
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		div {
			display: grid;
			grid-template-columns: auto auto auto;
			
		}
		div.sec{
			display: grid;
			grid-template-columns: auto auto;
			
		}
		input {
			margin: auto auto auto auto;
		}
		body {
			margin: auto auto auto auto;
			width: 30%;
			text-align: center;
		}
	</style>
</head>
<body>
	<br>
	<fieldset>
		<h1>BUY ITEM</h1>
		<form method="post">
			<div>
				<br>
				<h3>ITEM</h3>
				<h3>PRICE</h3>
				<input type="checkbox" name="cp" value="cellphone"><h4>cellphone</h4>
				<h4>$100.00</h4>
				<input type="checkbox" name="lp" value="laptop"><h4>laptop</h4>
				<h4>$250.00</h4>
				<input type="checkbox" name="cam" value="camera"><h4>camera</h4>
				<h4>$350.00</h4>
			</div>
			<input type="submit" name="submit">
		</form>
	</fieldset>

	<?php 
		// initialize variables..
		$str="<h2>Items Purchased</h2><br>";
		$total=0.00;

		if(isset($_POST['submit'])){ 	// if first submit is pressed..
			// check which checkboxes are selected..
			if(isset($_POST['cp'])){ 
				$str.="<h4>cellphone</h4><h4>$100.00</h4>";
				$total+=100.00;
			}
			if(isset($_POST['lp'])){
				$str.="<h4>laptop</h4><h4>$250.00</h4>";
				$total+=250.00;
			}
			if(isset($_POST['cam'])){
				$str.="<h4>camera</h4><h4>$350.00</h4>";
				$total+=350.00;
			}

			echo items($str,$total);	//display total..
		}
		if(isset($_POST['submit2'])){	// if second submit is pressed..
			$cash=0;
			$cha=0;
			$total=0;
			// fetch values from inputs..
			$total=$_POST['total'];
			$cash=$_POST['cash'];
			$cha=$cash-$total;	// get change..
			// display change..
			if($cha>=0){
				echo "<fieldset>Balance: $".$cha."</fieldset>";
			}else {
				echo "<fieldset>Insufficient cash</fieldset>";
			}
			
		}
		function items($str,$total){	// display total bill.. get payment..
			echo "<fieldset><form method=\"post\"><div class=\"sec\">".$str."<h4>Total:</h4><input type=\"text\" name=\"total\" value=\"".$total."\"></h4><h4>Amount Paid</h4>
			<input type=\"text\" name=\"cash\">
			</div>
			<input type=\"submit\" name=\"submit2\"></form></fieldset>";
		}

	?>
</body>
</html>