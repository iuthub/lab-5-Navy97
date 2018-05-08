<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LAB 5</title>
</head>
<body>
	<h1 style="text-align: center"><strong>REGULAR EXPRESSIONS</strong></h1>
	<p>A. Check if a string contains another string. For ex, check if string 'The quick brown fox' contains word 'quick'.
	<br>You can test it by inserting any sentences that contains the word quick</p>
	<form action="a.php" method="POST">
	<input type="text" name="quick"/><br>
	<input type="submit" />
	</form>
	<p>B. Check if a string contains an email string..
	<br>You can test it by inserting any email address</p>
	<form action="b.php" method="POST">
	<input type="text" name="email"/><br>
	<input type="submit" />
	</form>
	<p>C. Check if a string contains a phone number of format +998-##-###-####, for ex (+998-97-1444444).
	<br>You can test it by inserting any phone number</p>
	<form action="c.php" method="POST">
	<input type="text" name="phone"/><br>
	<input type="submit" />
	</form>
	<p>D. Write a PHP script that removes the whitespaces from a string. Sample string: 'The quick " " brown
fox'. Expected Output : Thequick""brownfox
	<br>You can test it by inserting any text that contains whitespace</p>
	<form action="d.php" method="POST">
	<input type="text" name="space"/><br>
	<input type="submit" />
	</form>
	<p>E.Write a PHP script to remove nonnumeric characters except comma and dot. '$123,34.00A')12,334.00
	<br>You can test it by inserting any text with nonnumeric characters</p>
	<form action="e.php" method="POST">
	<input type="text" name="numeric"/><br>
	<input type="submit" />
	</form>
	<p>F.Write a PHP script to remove new lines (characters) from a string.
		 	<br>You can test it by inserting any text with new line</p>
	<form action="f.php" method="POST">
	<p><textarea rows="10" cols="45" name="newline" 
	placeholder="Twinkle, twinkle, little star,
How I wonder what you are.
Up above the world so high,
Like a diamond in the sky 

=>

Twinkle, twinkle, little star, How I wonder what you are. Up above the world so high, Like a diamond in the sky."></textarea></p>
	<input type="submit" />
	</form>
<p>G. Write a PHP script to extract text (within parenthesis) from a string.
	<form action="g.php" method="POST">
	<input type="text" name="braces"/ placeholder="You can test it by inserting any text within paranthesis"/><br>
	<input type="submit" />
	</form>



<h5 style="text-align: center"><strong>This assignment was completed by Navruzbek Noraliev u1610166</strong></h5>
	
</body>
</html>