<?php
// Input string
$string = "Order ID: 2456, Amount: 500";

// Use regex to find all numbers
preg_match_all("/\d+/", $string, $matches);

// Display the extracted numbers
echo "<h3>Original String:</h3>";
echo $string . "<br><br>";

echo "<h3>Extracted Numbers:</h3>";
foreach ($matches[0] as $number) {
    echo $number . "<br>";
}
?>
