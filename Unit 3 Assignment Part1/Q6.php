<?php
 date_default_timezone_set("Asia/Kolkata");

 $today= date("Y-m-d");
 echo "Today: " . $today . "<br>";

 $add15= date("Y-m-d",strtotime("+15 days"));
 echo "After Adding days: " . $add15 . "<br>";

 $sub15= date("Y-m-d",strtotime("-15 days"));
 echo "After Subtracting days: ". $sub15."<br>";
?>
<?php
$today= new DateTime();
echo "Today: ".$today->format("Y-m-d")."<br>";

$dateAdd=clone $today;
date_modify($dateAdd, "+25 days");
echo "After Adding :".$dateAdd->format("Y-m-d"). "<br>";

$datesub=clone $today;
date_modify($datesub, "-25 days");
echo "After Subtracting :".$datesub->format("Y-m-d"). "<br>";