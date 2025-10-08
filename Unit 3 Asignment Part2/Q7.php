<!DOCTYPE html>
<html>
<head>
    <title>Add Two Arrays</title>
</head>
<body style="font-family: Arial;">

<h2>Addition of Two One-Dimensional Arrays</h2>

<?php
// Create two arrays
$array1 = array(10, 20, 30, 40, 50);
$array2 = array(5, 15, 25, 35, 45);

echo "<h3>Array 1:</h3>";
print_r($array1);
echo "<br>";

echo "<h3>Array 2:</h3>";
print_r($array2);
echo "<br><br>";

// Perform addition of both arrays
$sumArray = array();
for ($i = 0; $i < count($array1); $i++) {
    $sumArray[$i] = $array1[$i] + $array2[$i];
}

// Display result
echo "<h3>Sum of Two Arrays:</h3>";
for ($i = 0; $i < count($sumArray); $i++) {
    echo $array1[$i] . " + " . $array2[$i] . " = " . $sumArray[$i] . "<br>";
}
?>
</body>
</html>
