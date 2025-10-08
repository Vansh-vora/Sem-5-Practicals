<?php
session_start();

// Store name and email in session variables
$_SESSION['name'] = "Rahul Sharma";
$_SESSION['email'] = "rahul@example.com";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Set Session Variables</title>
</head>
<body>
<h2>Session Variables Set</h2>
<p>Name: <?php echo $_SESSION['name']; ?></p>
<p>Email: <?php echo $_SESSION['email']; ?></p>

<p><a href="Q3_1.php">Go to Modify Session Page</a></p>
</body>
</html>
