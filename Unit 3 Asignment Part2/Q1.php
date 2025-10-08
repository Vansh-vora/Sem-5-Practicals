<!DOCTYPE html>
<html>
<head>
    <title>Department Employee List</title>
</head>
<body style="font-family: Arial;">

<h2>Department Employee List (Sorted)</h2>

<?php
// Step 1: Store data in associative array
$departments = array(
    "HR" => array("Girish", "Neha", "Puja"),
    "Account" => array("Asha", "Rehan", "Tina"),
    "Sales" => array("Twisha", "Keyuri", "Rohit")
);

// Step 2: Sort each department's employee names alphabetically
foreach ($departments as $dept => &$employees) {
    sort($employees); // Sort employee names
}
unset($employees); // break reference

// Step 3: Sort departments alphabetically (optional)
ksort($departments);

// Step 4: Display the data
foreach ($departments as $dept => $employees) {
    echo "<h3>$dept Department</h3>";
    echo "<ul>";
    foreach ($employees as $name) {
        echo "<li>$name</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>
