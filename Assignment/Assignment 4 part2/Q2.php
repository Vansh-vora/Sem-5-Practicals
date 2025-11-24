<?php
$string="Hello,how are you?";

if(preg_match("/^Hello/",$string)){
  echo "The string starts with hello";
}else{
  echo "The string does not start with hello";
}
?>