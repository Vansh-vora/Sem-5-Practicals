<!DOCTYPE html>
<html>
<head>
    <title>Display Colors using Foreach Loop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .color-box {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #000;
            width: 200px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>List of Colors (using foreach loop)</h2>

<?php
// Define a one-dimensional array with at least five colors
$colors = array("Red", "Green", "Blue", "Yellow", "Purple");

// Display each color using foreach loop
foreach ($colors as $color) {
    echo "<div class='color-box' style='background-color:$color; color:white;'>
            $color
          </div>";
}
?>

</body>
</html>
