<?php
	$var=$_POST['phone'];
	if (!preg_match("(\+998\-[0-9]{2}\-[0-9]{7})",$var))
	{
	echo "the text doesn't contain the email address";;
	}
	else
	{
	 echo "the text contains the email address";
	}

?>
