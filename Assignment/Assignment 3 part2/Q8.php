<!DOCTYPE html>
<html>
<head>
    <title>2D Array Matrix</title>
    <style>
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
// Create a 2D array
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo "<h3>Matrix Output</h3>";
echo "<table>";

// Display as a table
foreach ($matrix as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
