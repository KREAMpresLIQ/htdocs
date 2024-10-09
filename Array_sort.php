<?php

	function printarr($arr){
		for($i=0;$i<count($arr);$i++){
			echo $arr[$i]."<br>";
		}
	}

	function printarray($arr){
		foreach($arr as $key=>$value){
			echo $key."=>".$value."<br>";
		}
	}

	$array_x = array(5, 2, -6, 14, 9);
	sort($array_x);
	rsort($array_x);
	printarr($array_x);
	
	$array_y = array("John"=>34, "Jack"=>43, "Jennifer"=>20);
	//asort($array_y);
	//arsort($array_y);
	ksort($array_y);
	krsort($array_y);
	printarray($array_y);
	
	
?>