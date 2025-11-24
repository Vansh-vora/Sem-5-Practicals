<?php
function product($x,$y){
  return $x * $y;
}

echo "The product is: ".product($_POST['num1'],$_POST['num2']);
?>