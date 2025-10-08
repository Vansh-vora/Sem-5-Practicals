<!DOCTYPE html>
<html>
<head>
    <title>Associative Array - Scientists</title>
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

<h2>Famous Scientists and Their Discoveries</h2>

<?php
// Create associative array
$scientists = array(
    "Newton" => "Gravity",
    "Albert" => "Energy",
    "Edison" => "Bulb",
    "Tesla" => "AC"
);

// Display array using foreach loop
echo "<table>";
echo "<tr><th>Scientist</th><th>Invention / Discovery</th></tr>";

foreach ($scientists as $name => $discovery) {
    echo "<tr><td>$name</td><td>$discovery</td></tr>";
}

echo "</table>";
?>

</body>
</html>
