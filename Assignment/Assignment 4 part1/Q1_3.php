<?php
session_start();

if(!isset($_SESSION['username'])){
  header("Location: Q1_1.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<a href="Q1_4.php">Logout</a>

</body>
</html>
