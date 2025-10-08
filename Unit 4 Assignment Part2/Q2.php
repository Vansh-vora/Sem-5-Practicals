<?php
session_start();

// Check if the session variable exists
if(isset($_SESSION['count'])) {
    $_SESSION['count'] += 1; // Increment count
} else {
    $_SESSION['count'] = 1; // Initialize count
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Page Refresh Counter</title>
    <style>
        body { font-family: Arial; margin: 50px; }
        .counter { font-size: 20px; font-weight: bold; color: blue; }
    </style>
</head>
<body>

<h2>Page Refresh Counter using PHP Session</h2>
<p>This page has been refreshed <span class="counter"><?php echo $_SESSION['count']; ?></span> times during this session.</p>

<form method="post">
    <input type="submit" name="reset" value="Reset Counter">
</form>

<?php
// Optional: Reset counter
if(isset($_POST['reset'])) {
    $_SESSION['count'] = 0;
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

</body>
</html>
