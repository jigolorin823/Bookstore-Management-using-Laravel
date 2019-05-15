<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

	$file = fopen("DOCUMENTS.txt", "r") or die("Unable to open file!");
// echo fread($file,filesize("DOCUMENTS.txt"));
	while(!feof($file)){
		echo fgets($file)."<br>";
	}
fclose($file);

?>

</body>
</html>