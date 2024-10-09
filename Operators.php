<?php

	$var_x = 8;
	$var_y = 4;
	
	$var_result = $var_x + $var_y; // Addition
	echo $var_result." Addition <br>";
	$var_result = $var_x - $var_y; // Subtraction
	echo $var_result." Subtraction <br>";
	$var_result = $var_x * $var_y; // Multiplication
	echo $var_result." Multiplication <br>";
	$var_result = $var_x / $var_y; // Division
	echo $var_result." Division <br>";
	$var_result = $var_x % $var_y; // Modulus
	echo $var_result." Modulus <br>";
	$var_result = $var_x ** $var_y; // Exponentiation
	echo $var_result." Exponentiation <br>";

	$var_a = 5;
	$var_b = 5;
	
	if($var_a == $var_b){
		echo "The two variables are equal!<br />";
		
	}else{
		echo "The two variables are not equal!<br />";
	}
	
	$var_a = true;
	$var_b = false;
	
	if($var_a === $var_b){
		echo "The two variables are equal!<br />";
	}else{
		echo "The two variables are not equal!<br />";
	}
	
	$var_a = 2;
	$var_b = 1;
	
	if($var_a != $var_b){
		echo "TRUE!	<br />";
	}else{
		echo "FALSE!<br />";
	}
	
	$var_a = true;
	$var_b = 0;
	
	if($var_a !== $var_b){
		echo "TRUE!	<br />";
	}else{
		echo "FALSE!<br />";
	}

?>
