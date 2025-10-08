<!DOCTYPE html>
<html>
<head>
    <title>Associative Array Sorting</title>
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

<h2>Associative Array Sorting Example</h2>

<?php
// Create associative array
$salaries = array(
    "atul" => 2000,
    "ravi" => 1000,
    "rahul" => 500
);

// Original array
echo "<h3>Original Array:</h3>";
echo "<pre>";
print_r($salaries);
echo "</pre>";

// Sort by value (ascending)
asort($salaries);
echo "<h3>After asort() - Sort by Value (Ascending):</h3>";
echo "<pre>";
print_r($salaries);
echo "</pre>";

// Sort by value (descending)
arsort($salaries);
echo "<h3>After arsort() - Sort by Value (Descending):</h3>";
echo "<pre>";
print_r($salaries);
echo "</pre>";

// Sort by key (ascending)
ksort($salaries);
echo "<h3>After ksort() - Sort by Key (Ascending):</h3>";
echo "<pre>";
print_r($salaries);
echo "</pre>";

// Sort by key (descending)
krsort($salaries);
echo "<h3>After krsort() - Sort by Key (Descending):</h3>";
echo "<pre>";
print_r($salaries);
echo "</pre>";
?>

</body>
</html>
