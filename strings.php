<!DOCTYPE html>
<html> 
<head>
	<!-- Created 99-99-9999 by your name  -->
	<!-- This page is an example php application. -->
	<title>String Expressions</title>
</head>
<body>
	<h1>Using Expressions with Strings</h1>
	<hr />
	<h3>String Symboles</h3>
	<p>The examples below use symbols that work with Strings.  These symbols are:
	<ul>
		<li>' or " are the quotes around String literals. </li>
		<li>\ is used to escape special symbols that conflict with PHP. </li>
		<li>{ } braces are used to surround a variable name used inside  a String literal. </li>
		<li> dot .  is used for concatenation </li>
		<li> .= is used to concatenate and assign </li>
		
	</ul>
		</p>
	<?php //Either single or double quotes are used around strings.
		echo "Example 1 uses single and double quotes and <br/>";
		$phrase = "Hello World";
		$name = 'Jane Doe';
			echo "$phrase $name<br />";
			echo '$phrase $name<br />';
			
		echo "Example 2 uses {} , concatenation and .= <br/>";
		$filename = "data";
		$filenumber = 1;
		$path = "/";
			echo "The filename is $path{$filename}0$filenumber.dat<br />";
		$fullname=$path.$filename."0".$filenumber.".dat";
			echo "The filename is $fullname<br />";
		$fullname=$path;	
		$fullname.=$filename;
		$fullname.=0;
		$fullname.=$filenumber;
		$fullname.=".dat";
			echo "The filename is $fullname<br />";
	?>
	</p>

</body>
</html>