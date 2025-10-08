<?php
session_start();

// Unset only the email session variable
if(isset($_SESSION['email'])) {
    unset($_SESSION['email']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Unset Session Variable</title>
</head>
<body>
<h2>Unset Email Session Variable</h2>
<p>Name (still in session): <?php echo $_SESSION['name']; ?></p>
<p>Email: <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : "Email variable has been unset"; ?></p>

<p><a href="Q3.php">Back to Start</a></p>
</body>
</html>
