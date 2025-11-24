<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $age=$_POST['age'];

    if ($age>=18){
      echo "$age is Eligible to vote";
    }else{
      echo "$age is not Eligible to vote";
    }
}
?>