<?php
	$var=$_POST['space'];
	$va=preg_replace( "/\s+/",'', $var);
	echo $va;
?>
