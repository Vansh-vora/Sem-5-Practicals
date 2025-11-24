<?php
// Function to sort and reverse any array
function sortedReverse($arr) {
    rsort($arr);   // sort in descending order
    return $arr;   // return reversed sorted array
}

// Array1 (numbers)
$array1 = array(32, 344, 12, 1, 31);

// Array2 (string → convert to character array)
$array2 = str_split("GLS UNIVERSITY");

// Get results
$result1 = sortedReverse($array1);
$result2 = sortedReverse($array2);

// Display results
echo "Sorted Reverse of Array1:<br>";
print_r($result1);
echo "<br><br>";

echo "Sorted Reverse of Array2:<br>";
print_r($result2);
?>
