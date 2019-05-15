<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		div {
			display: grid;
			grid-template-columns: auto auto auto auto;
			margin: auto auto auto auto;
			border-style: dotted;
		
		}
		div.sec{
			display: grid;
			grid-template-columns: auto auto;
			
		}
		h3.head{
			font-size: 30px;
		}
		input{
			margin: auto auto auto auto;
		}
		body {
			margin: auto auto auto auto;
			width: 60%;
			text-align: center;
			background-color: aqua;
			color: green;
		}
	</style>
</head>
<body>

	<?php
		$items = array("Cellphone", "Laptop", "Camera");
		$price = array(100, 150, 50);
		$total=0;
		$str="<h4>RESULT</h4><br><h1></h1><h1></h1><h4>Items</h4><h4>Qty</h4><h4>Price</h4><h4>Subtotal</h4>";
		echo "<fieldset><form method=\"post\">
			<div>
				<h3 class=\"head\">SELECT</h3>
				<h3 class=\"head\">ITEM</h3>
				<h3 class=\"head\">PRICE</h3>
				<h3 class=\"head\">QUANTITY</h3>
			";
		foreach ($items as $num => $item) {
			echo "<input type=\"checkbox\" name=\"".$item."\" ><h4>".$item."</h4>
				<h4>$".$price[$num]."</h4>
				<input type=\"text\" name=\"".$item."-quan\">";
		}
			echo "</div>
				<input type=\"submit\" name=\"submit\">
				<br>
				<input type=\"submit\" name=\"add\" value=\"ADD\">
				</form></fieldset>";

		if(isset($_POST['submit'])){
			foreach ($items as $num => $item) {
				echo $item;
				$hold = $item.'-quan';
				if(isset($_POST[$item])){
					$sub=($price[$num]*$_POST[$hold]);
					$total+=$sub;	
					$str.="<h4>".$item."</h4><h4>".$_POST[$hold]."</h4><h4>".$price[$num]."</h4><h4>".$sub."</h4>";
				
				}
			}
			items($str,$total);
		}
		function items($str,$total){	// display total bill.. get payment..
			echo "<fieldset><form method=\"post\"><div>".$str."<h4>Total:</h4>".$total."</h4><h4>Amount Paid</h4>
			<input type=\"text\" name=\"cash\">
			<input type=\"hidden\" name=\"total\" value=\"".$total."\">
			</div>
			<input type=\"submit\" name=\"submit2\"></form></fieldset>";
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
		if(isset($_POST['add'])){
			echo "<fieldset><form method=\"post\"><div class=\"sec\">
			<h4>Item:</h4><input type=\"text\" name=\"itemname\">
			<h4>Price:</h4><input type=\"text\" name=\"itemprice\">
			</div>
			<input type=\"submit\" name=\"submit3\" onclick=\"gg()\"></form></fieldset>";
		}
			if(isset($_POST['submit3'])){
				array_push($items, $_POST['itemname']);
				array_push($price, $_POST['itemprice']);
				$str="<h4>RESULT</h4><br><h1></h1><h1></h1><h4>Items</h4><h4>Qty</h4><h4>Price</h4><h4>Subtotal</h4>";
			echo "<fieldset><form method=\"post\">
				<div>
					<h3 class=\"head\">SELECT</h3>
					<h3 class=\"head\">ITEM</h3>
					<h3 class=\"head\">PRICE</h3>
					<h3 class=\"head\">QUANTITY</h3>
				";
			foreach ($items as $num => $item) {
				echo "<input type=\"checkbox\" name=\"".$item."\" ><h4>".$item."</h4>
					<h4>$".$price[$num]."</h4>
					<input type=\"text\" name=\"".$item."-quan\">";
			}
				echo "</div>
					<input type=\"submit\" name=\"submit\">
					<br>
					<input type=\"submit\" name=\"add\" value=\"ADD\">
					</form></fieldset>";
			}
	?>

<script type="text/javascript">
	function gg(event){
		event.preventDefault();
	}
</script>
</body>
</html>