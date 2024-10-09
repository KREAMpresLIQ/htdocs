<?php
	$x = 5; // global variable
	$y = 4; // global variable

	function OutputValue(){
		//global $x, $y;
		$x = 4; // local variable
		$GLOBALS['x'] = $GLOBALS['x'] + $GLOBALS['y'];
		echo $x."<br />";
	}
	OutputValue();
	echo $x;
?>