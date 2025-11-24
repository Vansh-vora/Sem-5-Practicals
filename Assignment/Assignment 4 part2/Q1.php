<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
  $mobile=$_POST['mobile'];

  $pattern="/^\d{10}$/";

  if (preg_match($pattern,$mobile)){
    $message="Valid Mobile number";
  }
  else{
    $message="Invalid Mobile number!";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mobile Number Validation</title>
</head>
<body>

<h2>Mobile Number Validation</h2>

<form method="post">
    Enter Mobile Number: <input type="text" name="mobile" required><br><br>
    <input type="submit" value="Validate">
</form>

<?php
if(isset($message)){
  echo "<p>$message</p>";
}
?>

</body>
</html>