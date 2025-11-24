<?php
#Write a PHP script to print the difference between current date and your birth date.

$birthdate= new DateTime("2005-11-16");

$currentdate= new DateTime();

$diff=$currentdate->diff($birthdate);

echo "Difference between Current date and BirthDate<br>";
echo $diff->y."Years";
echo $diff->m."Months";
echo $diff->d."Days.";
?>