<!DOCTYPE html>
<html> 
<head>
	<!-- Created 4-11-2018 by your Ray Ryon  -->
	<!-- This page is an example php application to gather information about autoglobals. -->
	<title>Autoglobals</title>
</head>
<body>
	<h1>Autoglobals</h1>
	<hr />
	<h3>Autoglobals  </h3>
	<p> 
		Autoglobals are also called Superglobals. 
		They are always accessable in any PHP code, and do not need the special global keyword to access them. They are automatically global in nature.
		Autoglobals are stored in a predefined array named $GLOBALS.
	</p>
	<?php // .
	
	
echo ' <br /> $_ENV["CLASSPATH"]: ' . getenv("CLASSPATH")." \<br />\n"; 
echo "getenv('OS'): ".getenv('OS')." <br />\n"; 
 echo '$_SERVER["DOCUMENT_ROOT"]: ' . $_SERVER["DOCUMENT_ROOT"] ." <br />\n";
echo '$_SERVER["REMOTE_ADDR"]: ' . $_SERVER['REMOTE_ADDR'] ." <br />\n";
echo  '$_SERVER["SCRIPT_NAME"]: '. $_SERVER['SCRIPT_NAME']." <br />\n";

	
	// Answers for lab 1
		echo "List one member of _SERVER array.<br>";
		 echo $_SERVER['SCRIPT_NAME']."<br>";
		echo "List one member of the_ENV array.<br>";
		 echo getenv('USERNAME');		 
		echo "<br>List of all the members of the SERVER array.";
		 var_dump($_SERVER);
		echo "<br>List of all the members of the _ENV array.";
		 var_dump($_ENV);

	echo "List of all the members of the Globals array.";
		 var_dump($GLOBALS);
		 
		phpinfo();
	?>
</body>
</html>