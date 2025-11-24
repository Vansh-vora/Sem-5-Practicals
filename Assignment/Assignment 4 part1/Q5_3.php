<?php
session_start();
session_unset();
session_destroy();

// Optionally delete cookie on logout
if (isset($_COOKIE['username'])) {
    setcookie("username", "", time() - 3600, "/");
}

header("Location: login_remember.php");
exit();
?>
