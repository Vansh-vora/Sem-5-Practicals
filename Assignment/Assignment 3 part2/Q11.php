<?php

// Associative array of directions
$directions = array(
    "Up"    => "North",
    "Down"  => "South",
    "Left"  => "West",
    "Right" => "East"
);

// Display only keys
echo "<b>Keys (Directions):</b><br>";
foreach ($directions as $key => $value) {
    echo $key . "<br>";
}

echo "<br>";

// Display only values
echo "<b>Values (Mapped Directions):</b><br>";
foreach ($directions as $key => $value) {
    echo $value . "<br>";
}

?>
