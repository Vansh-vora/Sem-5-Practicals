<?php
$students = [
    "Amit"  => ["Math" => 78, "Science" => 82, "English" => 74],
    "Neha"  => ["Math" => 85, "Science" => 80, "English" => 79],
    "Karan" => ["Math" => 92, "Science" => 91, "English" => 88]
];

echo "<h3>Student Marks & Total</h3>";

foreach ($students as $name => $subjects) {
    $total = array_sum($subjects);

    echo "<b>$name</b>: ";
    echo "Total Marks = $total<br>";
}
?>
