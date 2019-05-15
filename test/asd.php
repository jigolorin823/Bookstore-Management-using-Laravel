<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<label>Input 3 numbers:</label><br>
		<input type="numbers" name="n1" value="<?php echo isset($_POST['n1'])? $_POST['n1']: '';?>">
		<input type="numbers" name="n2" value="<?php echo isset($_POST['n2'])? $_POST['n2']: '';?>">
		<input type="numbers" name="n3" value="<?php echo isset($_POST['n3'])? $_POST['n3']: '';?>"><br>
		
		<select name="ch">
			<option>----</option>
			<option>Add</option>
			<option>Multiply</option>
			<option>Subtract</option>
			<option>Divide</option>
			<option>Average</option>
			<option>Minimum</option>
			<option>Maximum</option>
			<option>Display Odd</option>
		</select>
		<input type="submit" name="submit">
		
	</form>
	<?php
		$n1=0;
		$n2=0;
		$n3=0;

		if (isset($_POST['submit'])) {
			
			$n1=$_POST['n1'];
			$n2=$_POST['n2'];
			$n3=$_POST['n3'];
			echo "Inputs are: ".$n1." ".$n2." ".$n3;
			display();

		}

		if (isset($_POST['submit2'])) {
			$num1=$_POST['sel-box1'];
			$num2=$_POST['sel-box2'];
			echo $num1-$num2;
		}
		if (isset($_POST['submit3'])) {
			$num1=$_POST['sel-box1'];
			$num2=$_POST['sel-box2'];
			echo $num1/$num2;
		}
		if (isset($_POST['submit4'])) {
			$num1=$_POST['sel-box1'];
			for ($i=1; $i<=$num1 ; $i=$i+2) { 
				echo $i." ";
			}
		}
		function display(){
			global $n1,$n2,$n3;
			switch ($_POST['ch']) {
				case 'Add':
					echo add($n1,$n2,$n3);
					break;
				
				case 'Multiply':
					echo mul($n1,$n2,$n3);
					break;
				case 'Subtract':{
					selNum($n1,$n2,$n3);
					break;
				}
				case 'Divide':{
					selNum2($n1,$n2,$n3);
					break;
				}
				case 'Average':
					echo avg($n1,$n2,$n3);
					break;
				case 'Minimum':
					echo minim($n1,$n2,$n3);
					break;
				case 'Maximum':
					echo maxim($n1,$n2,$n3);
					break;
				case 'Display Odd':
					echo selNum3($n1,$n2,$n3);
					break;
				default:
					echo "qwe";
					break;
			}
		}

		function add($n1,$n2,$n3){
			return $n1+$n2+$n3;
		}
		function mul($n1,$n2,$n3){
			return $n1*$n2*$n3;
		}
		function avg($n1,$n2,$n3){
			$hold=(add($n1,$n2,$n3)/3);
			return $hold;
		}
		function minim($n1,$n2,$n3){
			$hold=$n1;
			if($n2<$hold){
				$hold=$n2;
			}
			if($n3<$hold){
				$hold=$n3;
			}
			return $hold;	
		}
		function maxim($n1,$n2,$n3){
			$hold=$n1;
			if($n2>$hold){
				$hold=$n2;
			}
			if($n3>$hold){
				$hold=$n3;
			}
			return $hold;	
		}
		function selNum($n1,$n2,$n3){
			echo "<form method=\"post\">
			<select name=\"sel-box1\">
				<option>".$n1."</option>
				<option>".$n2."</option>
				<option>".$n3."</option>
			</select>
			<select name=\"sel-box2\">
				<option>".$n1."</option>
				<option>".$n2."</option>
				<option>".$n3."</option>
			</select>
			<input type=\"submit\" name=\"submit2\">
			</form>";
		}
		function selNum2($n1,$n2,$n3){
			echo "<form method=\"post\">
			<select name=\"sel-box1\">
				<option>".$n1."</option>
				<option>".$n2."</option>
				<option>".$n3."</option>
			</select>
			<select name=\"sel-box2\">
				<option>".$n1."</option>
				<option>".$n2."</option>
				<option>".$n3."</option>
			</select>
			<input type=\"submit\" name=\"submit3\">
			</form>";
		}
		function selNum3($n1,$n2,$n3){
			echo "<form method=\"post\">
			<select name=\"sel-box1\">
				<option>".$n1."</option>
				<option>".$n2."</option>
				<option>".$n3."</option>
			</select>
			<input type=\"submit\" name=\"submit4\">
			</form>";
		}
		

	?>
	
</body>
</html>