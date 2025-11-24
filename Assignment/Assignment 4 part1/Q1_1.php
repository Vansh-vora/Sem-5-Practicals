<?php
session_start();

if(isset($_SESSION['username'])){
  header("Location: Q1_3.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post" action="Q1_2.php">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>