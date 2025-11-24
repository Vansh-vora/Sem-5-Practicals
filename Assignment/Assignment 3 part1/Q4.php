<?php
#1.  convert a date from yyyy-mmdd to dd-mm-yyyy 
#2.  $date =” 10:30pm April 15 2014” Convert this string to date.

$date="2025-11-24";

$newDate= date("d-m-Y",strtotime($date));

echo "Converted Date: ".$newDate;

$dateString="10:30pm April 15 2014";

$convertedDate= date("Y-m-d H:i:s",strtotime($dateString));

echo "Converted String: ".$convertedDate;
?>
