<?php
$a = [
    [1, 3, 5],
    [2, 4, 6],
    [7, 8, 9]
];

$b = [
    [9, 8, 7],
    [6, 5, 4],
    [3, 2, 1]
];

$sum = [];

echo "<h3>Matrix Addition Result</h3>";

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $sum[$i][$j] = $a[$i][$j] + $b[$i][$j];
        echo $sum[$i][$j] . " ";
    }
    echo "<br>";
}
?>
