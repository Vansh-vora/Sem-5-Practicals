<?php
session_start();

// Modify the email value
if(isset($_SESSION['email'])) {
    $_SESSION['email'] = "rahul.sharma@newmail.com";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modify Session Variables</title>
</head>
<body>
<h2>Session Variables Modified</h2>
<p>Name: <?php echo $_SESSION['name']; ?></p>
<p>Email (modified): <?php echo $_SESSION['email']; ?></p>

<p><a href="Q3_2.php">Go to Unset Email</a></p>
</body>
</html>
