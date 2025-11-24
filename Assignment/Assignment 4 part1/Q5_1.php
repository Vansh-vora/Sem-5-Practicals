<?php
session_start();

// Hardcoded credentials for demo
$correct_username = "admin";
$correct_password = "1234";

// Check if form submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']); // checkbox

    if ($username == $correct_username && $password == $correct_password) {
        $_SESSION['username'] = $username; // store in session

        // If 'Remember Me' checked, store username in cookie for 7 days
        if ($remember) {
            setcookie("username", $username, time() + 7*24*60*60, "/");
        } else {
            // If not checked, delete cookie if exists
            if (isset($_COOKIE['username'])) {
                setcookie("username", "", time() - 3600, "/");
            }
        }

        header("Location: welcome_remember.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}

// Pre-fill username if cookie exists
$cookie_username = isset($_COOKIE['username']) ? $_COOKIE['username'] : "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form with Remember Me</title>
</head>
<body>

<h2>Login</h2>

<?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="post">
    Username: <input type="text" name="username" value="<?php echo $cookie_username; ?>" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="checkbox" name="remember" <?php if($cookie_username) echo "checked"; ?>> Remember Me<br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>
