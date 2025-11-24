<?php

// Statements
$st1 = "Sunset is the time of day when our sky meets the outer space solar winds.";
$st2 = "There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. I love looking at  the clouds.";

// 1. Reverse Statement 1
echo "1. Reverse Statement 1: <br>";
echo strrev($st1) . "<br><br>";

// 2. Convert first character of each statement to uppercase
echo "2. First letter uppercase: <br>";
echo ucfirst($st1) . "<br>";
echo ucfirst($st2) . "<br><br>";

// 3. Total occurrences of 'clouds' in Statement 2
echo "3. Total occurrences of 'clouds': <br>";
echo substr_count(strtolower($st2), "clouds") . "<br><br>";

// 4. Replace color pink with red
echo "4. Replace 'pink' with 'red': <br>";
echo str_replace("pink", "red", $st2) . "<br><br>";

// 5. Total number of words in Statement 2
echo "5. Total words in Statement 2: <br>";
echo str_word_count($st2) . "<br><br>";

// 6. Fetch portion “I love looking at the clouds.” and store in an array
$extract = "I love looking at the clouds.";
$arr = explode(" ", $extract);

echo "6. Extracted string stored in array: <br>";
print_r($arr);
echo "<br><br>";

// 7. Sort the array of above string
sort($arr);

echo "7. Sorted array: <br>";
print_r($arr);
echo "<br><br>";

// 8. Display the word 'day' in reverse order
echo "8. Reverse of 'day': <br>";
echo strrev("day") . "<br><br>";

// 9. Store string & display only 'spinning'
$st3 = "purple swirls, spinning and twisting";

echo "9. Display only 'spinning': <br>";
$parts = explode(" ", $st3);
echo $parts[2] . "<br><br>";

// 10. Add the string “I love rainy days” to Statement 2
echo "10. Add new string to Statement 2: <br>";
echo $st2 . " I love rainy days.";
?>
