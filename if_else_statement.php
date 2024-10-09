<?php
	
	/*
	$var_x = 5;
	$var_y = 6;
	$var_result = $var_x + $var_y;
	
	echo $var_result;
	*/
	
	if(date("H")<=15){
		echo "Have a Nice Day!<br/>";
	}else if(date("H")<21){
		echo "Waow. Too late, go sleep!<br/>";
	}else{
		echo "Good Night!<br/>";
	}

?>