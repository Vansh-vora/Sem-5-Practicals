<?php
//Question-1: Introduction & Creating Arrays
//1. Write a program to create an array of 5 integers and display all values.
//2. Modify the program to accept array elements from user input and print them in reverse
//order

$nums=$_POST['num'];

echo "Array Values:<br>";
foreach($nums as $n){
  echo $n."<br>";
}
?>