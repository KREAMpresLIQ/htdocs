<?php

	$array_cars = array("Skoda", "BMW", "Mercedes", "Opel", "Audi");
	
	foreach($array_cars as $value){
		echo $value."<br>";
	}
	
	$array_humans = array("John"=>35,"James"=>43,"Sandy"=>52);
	foreach($array_humans as $key => $value){
		echo "Key = [$key] => Value = $value\n<br>";
	}
?>
