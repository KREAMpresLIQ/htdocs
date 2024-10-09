<?php
	/*
	$var_i = $var_i+1;
	$var_i++;
	*/
	
	$var_x = 0;
	$var_x = $var_x+1;
	echo ($var_x++)."<br />";
	echo $var_x."<br />";
	echo ($var_x--)."<br />";
	echo $var_x."<br />";
	
	$var_bool_x = false;
	$var_bool_y = true;
	
	if($var_bool_x and $var_bool_y == true){
		echo "TRUE"."<br />";;
	}else{
		echo "FALSE"."<br />";;
	}
	
	$var_bool_x = false;
	$var_bool_y = true;
	
	if($var_bool_x or $var_bool_y == true){
		echo "TRUE"."<br />";;
	}else{
		echo "FALSE"."<br />";;
	}
	
	$var_z = "z";
	$var_v = " v";
	$var_z.=$var_v;
	echo $var_z;
	
?>