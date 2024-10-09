<?php
echo "Array<br>";
$colors = array("Black", "White", "Red");
print_r($colors);
echo "<br><br>";

echo "Count/Sizeof<br>";
echo "Size: " . sizeof($colors) . "<br>";
echo "<br>";

echo "ArrayPUSH<br>";
array_push($colors, "Blue", "Purple", "Orange", "Brown");
print_r($colors);
echo "<br/>";
echo "Size: " . sizeof($colors) . "<br>";

echo "<br/>";
echo "ArrayPOP<br>";
array_pop($colors);
print_r($colors);

array_unshift($colors, "Yellow", "Gray");
echo "<br/><br>";
echo "ArrayUNSHIFT<br>";
print_r($colors);

array_shift($colors);
echo "<br/><br>";
echo "ArraySHIFT<br>";
print_r($colors);
?>

