<?php
$m=$_POST['maths'];
$s=$_POST['science'];
$e=$_POST['english'];

$total=$m+$s+$e;
$percentage=($total/300)*100;

echo "Total Marks: ".$total."<br>";
echo "Percentage: ".$percentage."<br>";

if($percentage>=90){
  echo "Grade: A";
}elseif($percentage>=80){
  echo "Grade: B";
}elseif($percentage>=70){
  echo "Grade: C";
}elseif($percentage>=60){
  echo "Grade: D";
}else{
  echo "Grade: F"; 
}
?>