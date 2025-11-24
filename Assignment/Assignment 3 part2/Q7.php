<?php
// Two one-dimensional arrays
$arr1 = array(5, 10, 15, 20);
$arr2 = array(2, 4, 6, 8);

$sum = array();
$length = count($arr1);

for ($i = 0; $i < $length; $i++) {
    $sum[$i] = $arr1[$i] + $arr2[$i];  // Add elements
}

// Display result
echo "Array 1: ";
print_r($arr1);

echo "<br>Array 2: ";
print_r($arr2);

echo "<br>Addition Result: ";
print_r($sum);
?>
