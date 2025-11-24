<?php
$password="ABC@234";

if(preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",$password)){
  echo "Strong password";
}else{
  echo "Weak password";
}
?>