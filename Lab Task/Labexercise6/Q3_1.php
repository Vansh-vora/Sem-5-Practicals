<?php
$students = [
    ["roll"=>1, "name"=>"Amit", "course"=>"IMSc IT", "marks"=>78],
    ["roll"=>2, "name"=>"Priya", "course"=>"IMSc IT", "marks"=>88],
    ["roll"=>3, "name"=>"Karan", "course"=>"IMSc IT", "marks"=>92],
    ["roll"=>4, "name"=>"Neha", "course"=>"IMSc IT", "marks"=>85],
    ["roll"=>5, "name"=>"Mohan", "course"=>"IMSc IT", "marks"=>81]
];

echo "<table border='1' cellpadding='10'>
<tr>
    <th>Roll No</th>
    <th>Name</th>
    <th>Course</th>
    <th>Marks</th>
</tr>";

foreach($students as $stu){
    echo "<tr>
            <td>".$stu['roll']."</td>
            <td>".$stu['name']."</td>
            <td>".$stu['course']."</td>
            <td>".$stu['marks']."</td>
          </tr>";
}

echo "</table><br><br>";

// Find topper
$top = $students[0];

foreach($students as $st){
    if($st["marks"] > $top["marks"]){
        $top = $st;
    }
}

echo "<h3>Top Student</h3>";
echo "Name: ".$top["name"]."<br>";
echo "Marks: ".$top["marks"]."<br>";
?>
