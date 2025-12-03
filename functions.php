<!DOCTYPE html>
<html> 
<head>
	<!-- Created 99-99-9999 by name  -->
	<!-- This page demonstrates functions -->
	<title>Functions</title>
</head>
<body>
	<h1>Using some predefined PHP functions</h1>
	<hr />
	<p>1. Results of the round(3.556) function:
		<?php   echo round(3.556);      ?></p>
	<p>2. Results of the round(3.556,2) function:
		<?php   echo round(3.556,2);      ?></p>
	<p>3. Results of the number_format("1205409",2) function:
		<?php   echo number_format("1205409",2);      ?></p>	
	<p>4. Results of the sprintf("%'$7.2f", 3.556) function:
		<?php   echo sprintf("%'$7.2f", 3.556);      ?></p>
	<p>5. Results of the sprintf("$%7.2f", 3.556) function:
		<?php   echo sprintf("$%7.2f", 3.556);      ?>	</p>
	<p>6. Results of the date("F d, Y")  function:
		<?php   echo date("F d, Y") ; ?>	</p>
	<p>7. Results of the date("l m/d/y h:i a")  function:
		<?php   echo date("l m/d/y h:i a") ; ?></p>
	<p>8. Results of the date("l m/d/y h:i a")  function after setting the timezone:
		<?php  
		date_default_timezone_set("America/Chicago"); 
		echo date("l m/d/Y h:i a") ; ?></p>
</body>
</html>
