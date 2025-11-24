<!Doctype html>
<html>
  <body>
<?php
  #Create a php program with an HTML header and a PHP block that displays your current age using a variable.
  $birth_Year=2005;
  $current_Year=date("Y");
  $age=$current_Year - $birth_Year;
  echo "My current age is: $age";
?>
  </body>
</html>