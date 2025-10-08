<!DOCTYPE html>
<html>
<head>
    <title>Sort Associative Array</title>
</head>
<body style="font-family: Arial;">

<h2>Sort Associative Array Based on Semester</h2>

<?php
// Create associative array
$student = array(
    1 => 43,
    2 => 65,
    3 => 85,
    4 => 25,
    5 => 65
);

echo "<h3>Original Array:</h3>";
foreach($student as $sem => $marks) {
    echo "Semester $sem : $marks marks<br>";
}

// Sort based on semester (keys)
ksort($student);  // ksort = sort by key ascending

echo "<h3>Sorted by Semester (Ascending):</h3>";
foreach($student as $sem => $marks) {
    echo "Semester $sem : $marks marks<br>";
}

// (Optional) Sort based on marks (values)
asort($student);  // asort = sort by value ascending

echo "<h3>Sorted by Marks (Ascending):</h3>";
foreach($student as $sem => $marks) {
    echo "Semester $sem : $marks marks<br>";
}
?>
</body>
</html>
