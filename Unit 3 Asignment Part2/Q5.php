<!DOCTYPE html>
<html>
<head>
    <title>Average Temperature</title>
</head>
<body style="font-family: Arial;">

<h2>Average Temperature Calculation</h2>

<?php
// Create the array
$Temp = array(32, 43, 13, 56, 75, 33, 65);

// Define the function to calculate average
function AVERAGE($arr) {
    $total = array_sum($arr);   // Sum of all elements
    $count = count($arr);       // Number of elements
    $avg = $total / $count;     // Average formula
    return $avg;
}

// Display the array
echo "Temperature Values: ";
print_r($Temp);
echo "<br><br>";

// Call the function and display result
$average = AVERAGE($Temp);
echo "<b>Average Temperature:</b> " . round($average, 2);
?>
</body>
</html>
