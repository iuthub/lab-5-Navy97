<?php
	$email=$_POST['email'];
	if (!preg_match("([A-Za-z0-9]*@[a-z]*.[a-z]{2,4})",$email))
	{
	echo "the text doesn't contain the email address";;
	}
	else
	{
	 echo "the text contains the email address";
	}

?>
