<?php
$date= "2025-10-07";

$newDate=date("d-m-Y", strtotime($date));

echo "Original Date(yyyy-mm-dd): " . $date . "<br>";
echo "Converted Date(dd-mm-yyyy): " . $newDate . "<br>";

$dateStr= "10:30pm April 15 2014";

$timetamp=strtotime($dateStr);

$formattedDate= date("Y-m-d H:i:s", $timetamp);

echo "Original String: " . $dateStr . "<br>";
echo "Converted String: " . $formattedDate;
?>