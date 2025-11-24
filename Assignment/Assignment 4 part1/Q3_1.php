<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store user input in session
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    header("Location: Q3_2.php"); // Redirect to next page
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Enter Name & Email</title>
</head>
<body>

<h2>Enter Your Details</h2>
<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
