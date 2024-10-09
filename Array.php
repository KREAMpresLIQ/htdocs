<?php
	/*
	$array_x1 = 5;
	$array_x2 = 8;
	$array_x3 = 11;
	*/
	
	$array_x = array(2,5,8,9,11,-16,0);
	echo $array_x[0]."<br>";
	echo $array_x[5]."<br>";
	$array_y = array("two","five","eight","nine","eleven","sixteen","null");
	echo count($array_y)."<br>";
	for($i=0;$i<count($array_y);$i++){
		echo $array_y[$i]."<br>";
	}
	for($i=0;$i<sizeof($array_x);$i++){
		echo $array_x[$i]."<br>";
	}
	$humans = array("John"=>35,"James"=>43,"Sandy"=>52);
	echo $humans["Sandy"]."<br>";
	echo $humans["John"]."<br>";
?>