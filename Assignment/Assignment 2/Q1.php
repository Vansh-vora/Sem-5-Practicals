<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
  $number=$_POST['num'];

  if($number%2==0){
    echo "$number is even";
  }
  else{
    echo "$number is odd";
  }
}
?>