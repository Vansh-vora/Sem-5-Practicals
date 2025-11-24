<?php
$n=$_POST['number'];

if($n>0){
  echo "$n is a positive number.";
}elseif($n<0){
  echo "$n is a negative number.";
}else{
  echo "The number is zero.";
}
?>