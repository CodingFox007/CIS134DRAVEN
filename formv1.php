<!DOCTYPE html>
<html> 
<head>
	<!-- hiddenform.php Created 7-27-2018 by Ray Ryon -->
	<!-- This page is an example of form with hidden input. -->
	<title>Hidden Form Example</title>
</head>
<body>
	<p><b>Form For Input with hidden input</b></p>
	<form name="myform" action="hiddenformhandler.php" method="POST"> 
	<div align="center"> Enter your name here! 
	<input type="text" name="Name" size="25" /> <input type="hidden" name="StartTime"  value="<?php echo date("g:i a");?>" /> 
	<input type="submit" name="enter" value="Submit Form"/> 
	<br><br> 
	</div> 
	</form 
</body>
</html>