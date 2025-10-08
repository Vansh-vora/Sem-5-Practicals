<?php

$statement1="Sunset is the time of day when our sky meets the outer space solar winds.";
$statement2="There are blue, pink, and purple swirls, spinning and twisting, like clouds of balloons caught in a blender. I love looking at the clouds.";

//1.Reverse the Statement 1 (strrev)
$reversestat1= strrev($statement1);
echo "<b> 1. :</b> <br> $reversestat1 <br><br>";

//2. Convert the first character of each statement to uppercase. (ucfirst)
$ucfirststat1= ucfirst($statement1);
$ucfirststat2= ucfirst($statement2);

echo "<b> 2. :</b><br>$ucfirststat1<br><br>$ucfirststat2<br><br>";

//3. Display the total occurrences of clouds in statement 2.  (substr_count)
$cloudCount= substr_count(strtolower($statement2),"clouds");
echo "<b> 3: <br>$cloudCount<br><br>";

//4. Replace the color pink with red. (str_replace)
$replaceColor=str_replace("pink","red",$statement2);
echo "<b>4. :<b><br>$replaceColor<br><br>";

//5. Display the total number of words in Statement 2.  (str_word_count)
$wordcount=str_word_count($statement2);
echo "<b>5 :<b><br>$wordcount<br><br>";

// 6. Fetch portion "I love looking at the clouds." and store in an array (explode)(print_r)
$portion="I love looking at the clouds.";
$arrayportion= explode(" ", $portion);
echo "<b>6 Portion stored in array.</b><br>";
print_r($arrayportion);
echo "<br><br>";

// 7. Sort the above array (sort)
sort($arrayportion);
echo "<b>7.Sorted Array </b><br> ";
print_r($arrayportion);
echo "<br><br>";

// 8. Display the word "day" in reverse order
$word="day";
$reverseWord= strrev($word);
echo "<b>8. :</b>$reverseWord<br><br>";

// 9. Store "purple swirls, spinning and twisting" and display only "spinning"
$str9 ="purple swirls, spinning and twisting";
preg_match("/spinning/", $str9,$matches);
echo "<b> 9. : </b> " . $matches[0] . "<br><br>";

// 10. Add "I love rainy days" to statement 2
$addedStr= $statement2 . "I love rainy days.";
echo "<b>10 : <b><br>$addedStr<br><br>";

// 11. Remove the word "blender" from statement 2
$removedBlender = str_replace("blender", "", $statement2);
echo "<b>11. Statement 2 after removing 'blender':</b><br>$removedBlender<br><br>";
?>
