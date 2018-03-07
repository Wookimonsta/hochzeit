<?php
	 $path = 'emails.txt';
	 if (isset($_POST['name']) && isset($_POST['email'])) {
		$fh = fopen($path,"a+");
		$string = $_POST['name'].' - '.$_POST['email'];
		fwrite($fh,$string); // Write information to the file
		fclose($fh); // Close the file
	 }
?>