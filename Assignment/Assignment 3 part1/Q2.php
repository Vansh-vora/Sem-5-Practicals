<?php
#Write a PHP script to calculate number of days between two dates.
$date1=("2005-11-16");
$date2=("2004-10-16");

$start=new DateTime($date1);
$end=new DateTime($date2);

$diff=$start->diff($end);

echo $diff->days."days";