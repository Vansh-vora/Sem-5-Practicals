<?php

// Associative array of student data
$students = array(
    "Amit" => array(
        "Maths" => 85,
        "Science" => 90,
        "English" => 78
    ),
    "Neha" => array(
        "Maths" => 92,
        "Science" => 88,
        "English" => 81
    ),
    "Rohit" => array(
        "Maths" => 70,
        "Science" => 75,
        "English" => 68
    )
);

// Display student data
foreach ($students as $name => $subjects) {
    echo "<b>Student Name: $name</b><br>";
    
    foreach ($subjects as $subject => $marks) {
        echo "$subject : $marks<br>";
    }
    
    echo "<br>";
}

?>
