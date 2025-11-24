<?php

// Associative array
$salaries = array(
    "atul" => 2000,
    "ravi" => 1000,
    "rahul" => 500
);

// asort() – sort by value (ascending)
echo "<b>asort() – Sort by value (Ascending):</b><br>";
$asortArray = $salaries;
asort($asortArray);
print_r($asortArray);
echo "<br><br>";

// arsort() – sort by value (descending)
echo "<b>arsort() – Sort by value (Descending):</b><br>";
$arsortArray = $salaries;
arsort($arsortArray);
print_r($arsortArray);
echo "<br><br>";

// ksort() – sort by key (ascending)
echo "<b>ksort() – Sort by key (Ascending):</b><br>";
$ksortArray = $salaries;
ksort($ksortArray);
print_r($ksortArray);
echo "<br><br>";

// krsort() – sort by key (descending)
echo "<b>krsort() – Sort by key (Descending):</b><br>";
$krsortArray = $salaries;
krsort($krsortArray);
print_r($krsortArray);

?>
