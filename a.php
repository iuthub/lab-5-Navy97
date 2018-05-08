<?php
	
	$quick=$_POST['quick'];
	if (!preg_match("(quick)",$quick))
	{
	 echo "the text doesn't contain the word quick!!! Please try again...";
	}
	else
	{
	 echo "the text contains the word quick";
	}

?>