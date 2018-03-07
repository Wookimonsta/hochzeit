<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html> 

<?php
	$my_file = '/var/www/heiraten/file.txt';
	$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
	$data = $_POST["name"] . $_POST["email"];
	fwrite($handle, $data);
	fclose($handle);
?>