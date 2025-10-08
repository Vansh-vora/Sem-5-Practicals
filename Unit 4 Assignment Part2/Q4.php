<?php
// Set cookie for 1 day (86400 seconds)
if(!isset($_COOKIE['user'])) {
    setcookie("user", "RahulSharma", time() + 86400, "/"); // cookie valid for 1 day
    $message = "Cookie 'user' has been created.";
} else {
    $message = "Cookie 'user' is already set. Value: " . $_COOKIE['user'];
}

// Delete cookie if requested
if(isset($_POST['delete'])) {
    setcookie("user", "", time() - 3600, "/"); // set expiry in the past to delete
    $message = "Cookie 'user' has been deleted.";
    header("Refresh:0"); // Refresh page to reflect change
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        input { padding: 8px 15px; margin-top: 10px; }
    </style>
</head>
<body>

<h2>PHP Cookie Creation & Expiry Example</h2>
<p><?php echo $message; ?></p>

<form method="post">
    <input type="submit" name="delete" value="Delete Cookie">
</form>

</body>
</html>
