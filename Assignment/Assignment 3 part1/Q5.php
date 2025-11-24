<?php
#Write a PHP script to display  the dates for the next six Sundays and next Thursday.

echo "<b>Next Six Sundays</b>";


$nextSunday=strtotime("next Sunday");

for($i=0;$i<6;$i++){
  echo date("d-m-Y",strtotime("+$i week",$nextSunday))."<br>";
}

echo "<b>Next Thursday</b>";

$nextThursday= strtotime("next Thursday");

echo date("d-m-Y",$nextThursday);

?>