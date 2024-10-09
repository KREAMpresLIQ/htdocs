<?php

	$array_cars = array(
			array("XYZ123","BMW",4),
			array("ABC456","AUDI",4),
			array("QWE879","MERCEDES",2),
			array("OPU863","LAMBORGHINI",2)
	);
	echo $array_cars[0][0];
	echo "<br>";
	echo $array_cars[3][1];
	
	echo '<table border="1">';
	echo "<tr><td>Brand: </td><td>Registration Number: </td><td>Doors: </td></tr>";
	for($i=0;$i<count($array_cars);$i++){
		echo "<tr>";
		for($j=0;$j<count($array_cars[$i]);$j++){
			echo "<td>".$array_cars[$i][$j]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>