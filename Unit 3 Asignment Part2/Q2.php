<!DOCTYPE html>
<html>
<head>
    <title>Sorted Reverse of Arrays</title>
</head>
<body style="font-family: Arial;">

<h2>Sorted Reverse of Arrays</h2>

<?php
// Function to display sorted reverse of arrays
function displaySortedReverse($arr) {
    if (is_array($arr)) {
        // Sort the array in ascending order first
        sort($arr);
        // Reverse the array
        $rev = array_reverse($arr);
        echo "Sorted & Reversed Array: ";
        print_r($rev);
        echo "<br><br>";
    } else {
        // If it's not an array, treat it as a string
        echo "Original String: $arr<br>";
        $revStr = strrev($arr);
        echo "Reversed String: $revStr<br><br>";
    }
}

// Array 1 (numeric)
$array1 = array(32, 344, 12, 1, 31);

// Array 2 (string)
$array2 = "GLS UNIVERSITY";

// Call the function
displaySortedReverse($array1);
displaySortedReverse($array2);
?>
</body>
</html>
