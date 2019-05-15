<!DOCTYPE html>

<head>
</head>

<body>



<form  method = "POST">
<center>
<fieldset style = "width: 18%" >

	<legend>User</legend>
	<input type = "text"  placeholder = "Enter a number" name = "inp_numbers" value="<?php echo isset($_POST['inp_numbers']) ? $_POST['inp_numbers'] : '' ?>">
	<input type = "submit" name = "sub1">

<hr><br>

<?php

		$num='';

			if(isset($_POST["sub1"]))
			{
				// global $num;
				$num = $_POST["inp_numbers"];
				for($a = 0; $a < $num; $a++)
				{
					echo "<input type = 'text' name = 'inp_num$a'; placeholder = 'Enter a number[$a]'><br>";
				}
				echo "<br><input type= 'submit' name = 'sub2'>";
			}
			if(isset($_POST["sub2"]))
			{
				// echo "Counter: ".$num;
				$num1 = $_POST["inp_numbers"];
				for($b = 0; $b < $num1; $b++)
				{
					echo "Index [".$b."]:  ";
					$my_string = $_POST['inp_num'.$b];
					echo "Mao ning value sa input:".$my_string."<br><br>";
				}
			}
		
		

	
?>

</fieldset>
</center>
</form>



</body>


</html>