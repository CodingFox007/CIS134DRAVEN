<?php 
// classcustomer.php Created 8-7-2018 by Ray Ryon  
// This file is an example php application defining a class.
class Customer  
{ 
private $name; 
private $amount; 
function __construct($n) 
{ 
 	$this->name = $n; 
 	$this->amount = 0; 
} 
function setName($n) 
{ 
 	$this->name= $n; 
} 
function setAmount($a) 
{ 
 	$this->amount= $a; 
} 
function getName() 
{ 
return $this->name; 
} 
function getAmount() 
{ 
 	return $this->amount; 
} 
}//end of class 
	?>