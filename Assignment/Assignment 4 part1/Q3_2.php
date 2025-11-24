<?php
session_start();
if(!isset($_SESSION['name'])||!isset($_SESSION['email'])){
  header("Location: Q3_1.php");
  exit();
}

$_SESSION['email']= "modified_".$_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modify Email</title>
</head>
<body>

<h2>Page 2 - Email Modified</h2>
<p>Name: <?php echo $_SESSION['name']; ?></p>
<p>Email: <?php echo $_SESSION['email']; ?></p>

<a href="Q3_3.php">Go to Page 3 (Unset Email)</a>

</body>
</html>
