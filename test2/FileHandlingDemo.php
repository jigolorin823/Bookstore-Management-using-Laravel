<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

// echo readfile("Sample.txt");

// $myfile = fopen("Sample.txt", "r") or die("Unable to open file!");

$myfile = fopen("Sample.txt", "a");

// echo fread($myfile,filesize("Sample.txt"));

// echo fgets($myfile);
// echo fgets($myfile);

// echo fgetc($myfile);

// echo fgetc($myfile);

// while(!feof($myfile)) {
//   // echo fgets($myfile) . "<br>";
//   echo fgetc($myfile);
// }

// fwrite($myfile, " Hello");

fclose($myfile);




?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:<br>
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>