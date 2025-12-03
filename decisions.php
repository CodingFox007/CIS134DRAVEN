<!DOCTYPE html>
<html> 
<head>
	<!-- Created 99-99-9999 by name  -->
	<!-- This page demonstrates Decisions -->
	<title>Decisions</title>
</head>
<body>
	<h1>Using Decisions in PHP</h1>
	<hr />
	<p>
		<?php  
		date_default_timezone_set("America/Chicago"); 
		if (date("m/d") == "07/4" || date("m/d") == "12/25"|| date("m/d") == "10/31"){
			echo "How is your day going?";	 
			$dayString = 1;
		}
		else {
			$dayString = date("l");				
			echo "How is your day going?";
		}
  ?></p>
	<p> 
	<?php   
	switch ($dayString)
	{	
		case "Monday":
			echo "Nice start to the week!<br />";
			break;	
		case "Tuesday":
			echo "One down, three to go.<br />";
			break;	
		case "Wednesday":
			echo "Over the hump!<br />";
			break;	
		case "Thursday":
			echo "Good finish.<br />";
			break;
		case 1:
			echo "Happy Holiday<br />";
			break;
		default:
			echo "Must be the week end, enjoy!";
	}
     ?>
	 </p>
</body>
</html>
