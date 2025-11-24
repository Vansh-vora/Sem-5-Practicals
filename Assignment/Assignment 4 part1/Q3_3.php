<?php
session_start();

// Unset only the email session variable
unset($_SESSION['email']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Unset Email</title>
</head>
<body>

<h2>Page 3 - Email Unset</h2>
<p>Name: <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : "Not set"; ?></p>
<p>Email: <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : "Email has been unset"; ?></p>

</body>
</html>
