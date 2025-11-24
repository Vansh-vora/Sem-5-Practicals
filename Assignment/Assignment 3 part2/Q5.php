<?php

$temp=array(32,43,13,56,75,33,65);

function Average($arr){
  $total=array_sum($arr);
  $count=count($arr);
  return $total/$count;
}

$avg=Average($temp);

echo "$avg";