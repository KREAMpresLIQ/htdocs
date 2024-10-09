<?php

	function area($a, $b){
		$t = $a*$b;
		return $t;
	}
	function district($a, $b){
		$k = 2 * ($a + $b);
		return $k;
	}
	
	$a = 5213;
	$b = 4212;
	
	echo "The a=".$a." and b=".$b." area of rectangle: ".area($a,$b).", and its district: ".district($a, $b).".<br>";
?>