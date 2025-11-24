<?php
#Write a PHP script to display current date in following format.
 #• Year/Month/Date
 #• Year.Month.Date
 #• Year
 #• Date

 $currentdate= date("Y-m-d");

 echo "Year/Month/Date: ". date("Y/m/d")."<br>";
 echo "Year.Month.Date: ". date("Y.m.d")."<br>";
 echo "Year". date("Y")."<br>";
 echo "Date". date("d")."<br>";
?>