<?php

echo "<h3>Using For Loop:</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<h3>Using While Loop:</h3>";
$i = 1;
while ($i <= 10) {
    echo $i . " ";
    $i++;
}

echo "<h3>Using Do...While Loop:</h3>";
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= 10);

?>
