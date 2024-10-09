<?php
	
	$var1 = "text"; // string
	$var2 = 12; // int
	$var3 = 3.14; // float
	$var_result = $var2 + $var3;
	
	echo $var1."<br>";
	echo $var2 + $var3."<br>";
	
	echo $var2."+".$var3."=".($var_result)."<br>";

	$html_var = "<input type='text' />";
	echo $html_var."<br>";
	
	echo "Float variable ".$var3." --> decimal numbers"."<br>";
	
	$var4 = true; //bool
	$var5 = false;
	
	echo $var4."+".$var5;
?>