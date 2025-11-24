<?php

// 10 city names
$cities = [
    "Mumbai", "Delhi", "Ahmedabad", "Surat", "Rajkot",
    "Chennai", "Kolkata", "Pune", "Jaipur", "Bangalore"
];

// Sort alphabetically
sort($cities);

$userCity = ucfirst(strtolower($_POST['city'])); // normalize input

echo "<h3>Sorted City List:</h3>";
print_r($cities);
echo "<br><br>";

if (in_array($userCity, $cities)) {
    echo "<b>$userCity found in the list.</b>";
} else {
    echo "<b>$userCity NOT found.</b>";
}

?>
x`