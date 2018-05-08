<?php
	$var=$_POST['numeric'];
	$va=preg_replace( "/[^0-9,.]/",'', $var);
	echo $va;
?>
