<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<form action="test.php" method="POST">
			<input type="text" name="input">
			<input type="submit" name="btn1" value="Submit">
		</form>
	</div>
	<div>
		<?php

		function counts() {
			$vowel = ['a', 'e', 'i', 'o', 'u'];
			$str = test();
			$vc = 0;

			$size = strlen($str) - 1;

			for ($i = $size; $i >= 0; $i--) {
				for($j = count($vowel) - 1; $j >= 0; $j--) {
					if(strtolower($vowel[$j]) == strtolower($str[$i])) {
						$vc++;
					}
				}
			}

			echo 'The word ' . test() . ' has ' . $vc . ' Vowels and ' . (($size - $vc) + 1) . ' consonants';
		}

		function test() {
			return $_POST['input'];
		}

		function rev() {
			$str = test();
			$size = strlen($str) - 1;
			$strt = '';

			for ($i = $size; $i >= 0; $i--) {
				$strt .= $str[$i];
			}

			return $strt;
		}

		function isPalindrome() {
			echo test() === rev() ? "The word " . test() . " Is a Palindrome" : "The word " . test() . " is not a Palindrome <br>";
			counts();
		}

		if(isset($_POST['btn1'])) {
			isPalindrome();
		}

		?>
	</div>
</body>
</html>