<!DOCTYPE html>
<html> 
<head>
	<!-- Created 99-99-9999 by name  -->
	<!-- This page demonstrates Loops -->
	<title>Loops</title>
</head>
<body>
	<h1>Using Loops in PHP</h1>
	<hr />
	<p> While loop example to count down from 5.<br />
	<?php  
	for($Count = 5;$Count <10;++$Count)
{
	echo "$Count<br />";
}
	
		$Count = 6;
		while (--$Count > 0 )
		{
		   echo "$Count<br />";
		}

  ?></p> 
  	<p> Do while loop example to count down from 5.<br />
	<?php  
		$Count = 5;
		do
		{
			echo "$Count<br />";
		}while (--$Count > 0);


  ?></p> 
  	<p> For loop example to count down from 5.<br />
	<?php   
		for($Count = 5;$Count > 0;--$Count)
		{
			echo "$Count<br />";
		}

  ?></p> 
	<p> For each loop example to show values from array of colors.<br />
	<?php   
		$Colors = array("blue", "green", "pink", "purple", "red", "yellow");
		echo "Your choices of colors are: ";
		foreach($Colors as $number => $color)
		{
			if(count($Colors)-1 != $number)
				echo " $color, ";
			else
				echo " and $color.<br />";
		}

     ?>
	 </p>
</body>
</html>
