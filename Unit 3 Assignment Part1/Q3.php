<!DOCTYPE html>
<html>
<head>
    <title>Current Date Formats</title>
</head>
<body style="font-family:Arial, sans-serif;">
    <h2>Current Date in Different Formats</h2>
<?php
date_default_timezone_set("Asia/Kolkata");

$today=date("Y-m-d");

echo "<h3>Current Date: $today</h3>";
echo "<h3>Formatted Dates:</h3>";
echo "YYYY/MM/DD: " . date("Y/m/d") . "<br>";
echo "YYYY.MM.DD: " . date("Y.m.d") . "<br>";
echo "Year: " . date("Y") . "<br>";
echo "Date: " . date("d") . "<br>";
?>
</body>
</html>