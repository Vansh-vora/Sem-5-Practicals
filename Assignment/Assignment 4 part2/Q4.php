<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
  $email=$_POST['email'];

  $pattern="/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

  if (preg_match($pattern,$email)){
    $message="Valid email address";
  }else{
    $message="Invalid Email Address";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Email Validation</title>
</head>
<body>

<h2>Email Validation</h2>

<form method="post">
    Enter Email: <input type="text" name="email" required><br><br>
    <input type="submit" value="Validate">
</form>

<?php
if (isset($message)) {
    echo "<p>$message</p>";
}
?>

</body>
</html>