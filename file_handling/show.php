<?php

	$file = fopen("DOCUMENTS.txt", "r") or die("Cannot read the file");
	while(!feof($file)){
		$data = fgets($file);
		$token = strtok($data, "|");
?>
	<tr>
<?php
		while($token !== false){
?>

		<th><?php echo $token; ?></th>	

<?php 
			$token = strtok("|");
		}
?>	
		<th><a href="" class="btn btn-primary">Edit</a><a href="" class="btn btn-danger">Delete</a></th>
	</tr>
<?php
	}

	fclose($file);
?>