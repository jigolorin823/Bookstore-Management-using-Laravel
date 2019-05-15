<!DOCTYPE html>
<html>
	<body style = "background-color:#F2866F;">
		<fieldset style="text-align:center;">
			<fieldset style = "border-color:black;">
				<legend style= "color: black;">Laboratory Exercise 2</legend>
				<h1 style = "color: brown;">WELCOME!</h1>
				<hr>
				<div >
					<form action = "Lab3B_Lorin.php" method="GET">
						<label>Enter 1st Number:</label>
						<input type="text" name="num1" value=""><br>
						<label>Enter 2nd Number:</label>
						<input type="text" name="num2" value=""><br>
						<label>Enter 3rd Number:</label>
						<input type="text" name="num3" value=""><br>
						<input type="submit" name="submit">
						<input type="reset" name="reset">
					</form>
					
					
				</div>
			</fieldset>
			<br>
			<fieldset style = "border-color:black;">
				<?php
						function test(){
							$n1 = $_GET['num1'];
							$n2 = $_GET['num2'];
							$n3 = $_GET['num3'];
							
							display($n1,$n2,$n3);
							sum($n1,$n2,$n3);
							avg($n1,$n2,$n3);
							lrg($n1,$n2,$n3);
							sml($n1,$n2,$n3);
						}
						
						function display($n1,$n2,$n3){
							echo "The three values are: ".$n1.",".$n2.",".$n3;
							echo "<br>";
						}
						
						function sum($n1,$n2,$n3){
							echo "The sum of ".$n1.",".$n2.",".$n3." is ".($n1+$n2+$n3);
							echo "<br>";
						}
						
						function avg($n1,$n2,$n3){
							echo "The Average of the three numbers is: ".(($n1+$n2+$n3)/3);
							echo "<br>";
						}
						
						function lrg($n1,$n2,$n3){
							echo "The largest value is: ".max($n1,$n2,$n3);
							echo "<br>";
						}
						
						function sml($n1,$n2,$n3){
							echo "The smallest value is: ".min($n1,$n2,$n3);
						}
					
						if(isset($_GET['submit'])){
							test();
						}
					?>
			</fieldset>
		</fieldset>
	</body>
</html>