<?php
// Hardcoded username & password for demo
$correct_username = "admin";
$correct_password = "admin123";

// Initialize message
$error = "";

// Check if form submitted
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']); // Checkbox value

    if ($username === $correct_username && $password === $correct_password) {
        // Store username in cookie if "Remember Me" is checked
        if ($remember) {
            setcookie("username", $username, time() + (86400 * 30), "/"); // cookie valid for 30 days
        } else {
            // Delete cookie if unchecked
            if(isset($_COOKIE['username'])) {
                setcookie("username", "", time() - 3600, "/");
            }
        }

        $message = "Login successful! Welcome, $username.";
    } else {
        $error = "Invalid username or password!";
    }
}

// Pre-fill username if cookie exists
$stored_username = isset($_COOKIE['username']) ? $_COOKIE['username'] : "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login with Remember Me</title>
    <style>
        body { font-family: Arial; margin: 50px; }
        input { padding: 8px; margin: 5px 0; width: 250px; }
        input[type="submit"] { width: auto; }
        .error { color: red; }
        .success { color: green; font-weight: bold; }
    </style>
</head>
<body>

<h2>Login Form with "Remember Me"</h2>

<form method="post">
    Username:<br>
    <input type="text" name="username" value="<?php echo htmlspecialchars($stored_username); ?>" required><br>
    Password:<br>
    <input type="password" name="password" required><br>
    <input type="checkbox" name="remember" <?php if($stored_username) echo "checked"; ?>> Remember Me<br><br>
    <input type="submit" name="login" value="Login">
</form>

<?php
if($error != "") {
    echo "<p class='error'>$error</p>";
} elseif(isset($message)) {
    echo "<p class='success'>$message</p>";
}
?>

</body>
</html>
