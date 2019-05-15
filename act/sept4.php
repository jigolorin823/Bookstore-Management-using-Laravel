<?php 
	include ('converter.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: red;">
	<fieldset style="text-align: center; width: 40%;">
		
		<table style="width: 90%;">
			<th>
				<td style="text-align: center;"><b>CURRENCY CONVERTER</b></td>
			</th>
		<form method="post">
			<tr>
				<td>
					USD:<input type="text" name="usd" value="<?php echo isset($_POST['usd']) ? $_POST['usd'] : '' ?>"><br>
				</td>
				<td>
					<?php  
						
						$conv = new converter();
						
						if(isset($_POST['submit'])){
							$usd = $conv->convert("usd",$_POST['usd']);
							echo "USD to PHP: ".$usd."<br>";
						}
					?>
						
				</td>
			</tr>
			<tr>
				<td>
					GBP:<input type="text" name="gbp" value="<?php echo isset($_POST['gbp']) ? $_POST['gbp'] : '' ?>"><br>
				</td>
				<td>
					<?php  
						
						if(isset($_POST['submit'])){
							$gbp = $conv->convert("gbp",$_POST['gbp']);
							echo "GBP to PHP: ".$gbp."<br>";
						}
					?>
						
				</td>
			</tr>
			<tr>
				<td>
					EUR:<input type="text" name="eur" value="<?php echo isset($_POST['eur']) ? $_POST['eur'] : '' ?>"><br>
				</td>
				<td>
					<?php  
						
						if(isset($_POST['submit'])){
							$eur = $conv->convert("eur",$_POST['eur']);
							echo "EUR to PHP: ".$eur."<br>";
						}
					?>
						
				</td>
			</tr>
			<tr>
				<td>
					JPY:<input type="text" name="jpy" value="<?php echo isset($_POST['jpy']) ? $_POST['jpy'] : '' ?>"><br>
					
				</td>
				<td>
					<?php  
						
						if(isset($_POST['submit'])){
							$jpy = $conv->convert("jpy",$_POST['jpy']);
							echo "JPY to PHP: ".$jpy."<br>";
						}
					?>
						
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
				<td><b>Total:</b> <?php 
				if(isset($_POST['submit'])){
					$total = $usd+$gbp+$eur+$jpy;
					echo $total;
				}
				 ?></td>
			</tr>

			
			
			
			

		</form>
		<!-- <?php  
			$conv = new converter();
			if(isset($_POST['submit'])){
				echo "USD: ".$conv->convert("usd",$_POST['usd'])."<br>";
				echo "GBP: ".$conv->convert("gbp",$_POST['gbp'])."<br>";
				echo "EUR: ".$conv->convert("eur",$_POST['eur'])."<br>";
				echo "JPY: ".$conv->convert("jpy",$_POST['jpy'])."<br>";

			}
		?> -->
		</table>	
	</fieldset>

</body>
</html>