<?php

// Associative array
$info = array(
    "Newton" => "Gravity",
    "Albert" => "Energy",
    "Edison" => "Bulb",
    "Tesla"  => "AC"
);

// Display using foreach
echo "<h3>Scientists and Their Contributions:</h3>";

foreach ($info as $name => $contribution) {
    echo $name . " => " . $contribution . "<br>";
}

?>
