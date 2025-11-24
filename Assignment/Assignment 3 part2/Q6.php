<?php
$semmarks=array(
  1=>43,
  2=>65,
  3=>85,
  4=>25,
  5=>65
);

ksort($semmarks);

echo "<b>Sorted Based on Semester:</b><br>";

foreach($semmarks as $sem =>$marks){
  echo "$marks<br>";
}
?>