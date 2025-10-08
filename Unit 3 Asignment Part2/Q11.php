<!DOCTYPE html>
<html>
<head>
    <title>Associative Array - Directions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 40%;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Directions using Associative Array</h2>

<?php
// Create associative array
$directions = array(
    "Up" => "North",
    "Down" => "South",
    "Left" => "West",
    "Right" => "East"
);

// Display Keys and Values together
echo "<h3>All Directions:</h3>";
echo "<table>";
echo "<tr><th>Key</th><th>Value</th></tr>";

foreach ($directions as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</table>";

// Display Keys separately
echo "<h3>Keys (Directions):</h3>";
foreach (array_keys($directions) as $key) {
    echo $key . "<br>";
}

// Display Values separately
echo "<h3>Values (Meanings):</h3>";
foreach (array_values($directions) as $value) {
    echo $value . "<br>";
}
?>

</body>
</html>
