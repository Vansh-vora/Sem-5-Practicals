<?php
$students=[
  "Roll No"=>101,
  "Name"=>"Raj Patel",
  "Course"=>"IMsc IT",
  "Marks"=>89
];

echo "<table border='1'>";
foreach($students as $key =>$value){
  echo "<tr><td>$key</td>
  <td>$value</td></tr>";
}
echo "</table>";
?>