<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html> 

<?php
	$my_file = '/var/www/heiraten/file.txt';
	
	if (file_exists($my_file)) {
    echo "The file $filename exists";
	} else {
    echo "The file $filename does not exist";
	}
	
	$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
	$data = "Name: " . $_POST["name"] . " Email: " . $_POST["email"] . "\n";
	fwrite($handle, $data);
	fclose($handle);
?>