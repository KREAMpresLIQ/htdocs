<?php

	function QuadraticEquation($a, $b, $c){
		if($a == 0 && $b == 0){
			echo "It's not an equation <br>";
		}else if ($a == 0){
			$x = -1*$c/$b;
			echo "the equation is not quadratic! x=$x. <br>";
		}else{
			$d = $b*$b-4*$a*$c;
			if($d > 0){
				$x1 = (-1*$b+sqrt($d))/2*$a;
				$x2 = (-1*$b-sqrt($d))/2*$a;
				echo "the equation is quadratic, where the results are: x1=$x1, x2=$x2.<br>";
			}else if($d == 0){
				$x = -1*$b/2*$a;
				echo "The quadratic equation result: x=$x.<br>";
			}else{
				echo "Has no solution among the real numbers <br>";
			}
		}
	}
	QuadraticEquation(1, 2, -2);
	QuadraticEquation(1, 22, -2);
	QuadraticEquation(-13, 2, -2);
	QuadraticEquation(-1, 2, 22);
	QuadraticEquation(1, 212, -2);

?>