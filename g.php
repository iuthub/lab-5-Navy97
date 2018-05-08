<?php
	$var=$_POST['braces'];
	preg_match('#\[(.*?)\]#', $var, $va);
	print $va[1]."\n";
?>
