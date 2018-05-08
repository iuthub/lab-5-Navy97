<?php
	$var=$_POST['newline'];
	$va=preg_replace( "/\s+/"," ",trim($var));
	echo $va;
?>
