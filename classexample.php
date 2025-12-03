<!DOCTYPE html>
<html> 
<head>
	<!-- classexample.php Created 8-5-2018 by Ray Ryon  -->
	<!-- This page is an example php application creating an object. -->
	<title>Using a class</title>
	
</head>
<body>
	<h1>Using a class</h1>
	<hr />
	
	<?php 
	// include the class.
	require_once("class_customer.php");
	// instantiate an object
		$mycustomer = new Customer("Mary Jo");
	// call a mutator.
		$mycustomer->setAmount(50);
	// call getters
		echo "Name is ".$mycustomer->getName();
		echo "<br>Amount is ".$mycustomer->getAmount();		
	?>
	
</body>
</html>