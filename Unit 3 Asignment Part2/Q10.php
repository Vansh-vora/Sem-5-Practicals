<!DOCTYPE html>
<html>
<head>
    <title>Student Data using Associative Array</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>

<h2>Student Details</h2>

<?php
// Create an associative array with student name and sub-array for subjects & marks
$student = array(
    "name" => "Rahul Sharma",
    "subjects" => array(
        "Maths" => 85,
        "Science" => 90,
        "English" => 78,
        "Computer" => 92,
        "History" => 74
    )
);

// Display student name
echo "<h3>Student Name: " . $student["name"] . "</h3>";

// Display subject marks in table format
echo "<table>";
echo "<tr><th>Subject</th><th>Marks</th></tr>";

foreach ($student["subjects"] as $subject => $marks) {
    echo "<tr><td>$subject</td><td>$marks</td></tr>";
}

echo "</table>";
?>

</body>
</html>
