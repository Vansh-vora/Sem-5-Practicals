<?php

// Sample arrays
$a = [10, 20, 30];
$b = [40, 50];

// 1. count() / sizeof()
echo "count(): " . count($a) . "<br>";
echo "sizeof(): " . sizeof($a) . "<br><br>";

// 2. array_merge()
$merged = array_merge($a, $b);
echo "array_merge(): ";
print_r($merged);
echo "<br><br>";

// 3. array_push() / array_pop()
array_push($a, 99);
echo "After array_push(99): ";
print_r($a);
echo "<br>";

$popVal = array_pop($a);
echo "array_pop(): removed $popVal<br><br>";

// 4. array_search()
$pos = array_search(20, $a);
echo "array_search(20): Position = $pos<br><br>";

// 5. sort() / rsort()
sort($merged);
echo "sort(): ";
print_r($merged);
echo "<br>";

rsort($merged);
echo "rsort(): ";
print_r($merged);
echo "<br><br>";

// 6. in_array()
echo "in_array(50): ";
echo in_array(50, $merged) ? "Found" : "Not Found";

?>
