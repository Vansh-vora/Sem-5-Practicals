<!DOCTYPE html>
<html>
<head>
    <title>Find Min and Max from Array</title>
</head>
<body style="font-family: Arial;">

<h2>Lowest and Highest Temperature Values</h2>

<?php
// Create the array
$Temp = array(32, 43, 13, 56, 75, 33, 65);

// Display the array values
echo "Temperature Values: ";
print_r($Temp);
echo "<br><br>";

// Find lowest and highest values
$lowest = min($Temp);
$highest = max($Temp);

// Display results
echo "<b>Lowest Temperature:</b> $lowest<br>";
echo "<b>Highest Temperature:</b> $highest<br>";
?>
</body>
</html>
