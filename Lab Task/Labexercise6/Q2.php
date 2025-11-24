<?php
#Question- 2: Storing & Initializing Arrays
#1. Write a program that:
#• Declares an array of 10 numbers.
#• Initializes it with values from 1 to 10.
#• Prints the sum and average of all elements.

$arr=range(1,10);

$sum=array_sum($arr);
$avg=$sum/count($arr);

echo "Sum = $sum<br>";
echo "Average = $avg<br>";
?>