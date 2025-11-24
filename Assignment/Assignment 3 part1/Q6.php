<?php
#1. Write a PHP script to add and subtract 15 days from the current date.
# 2. Write a PHP script to use date_modify() to add and subtract 25 days form the current date.

$currentdate=date("Y-m-d");

echo "Current date: $currentdate<br>";

$add15=date("Y-m-d",strtotime("+15 days"));
echo "After adding 15 days: $add15<br>";

$sub15=date("Y-m-d",strtotime("-15 days"));
echo "After subtracting 15 days: $sub15<br>";

$date=new DateTime();

echo "Current Date:".$date->format("Y-m-d")."<br>";

$addDate= clone $date;
$addDate->modify("+25days");
echo "After 25 days:". $addDate->format("Y-m-d");
?>