<!DOCTYPE html>
<html>
<head>
    <title>Password Validation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        input[type="password"] {
            padding: 8px;
            width: 250px;
        }
        input[type="submit"] {
            padding: 8px 15px;
            margin-top: 10px;
        }
        .result {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Strong Password Validation</h2>

<form method="post">
    Enter Password: 
    <input type="password" name="password" placeholder="Enter password" required>
    <br><br>
    <input type="submit" name="submit" value="Validate">
</form>

<?php
if (isset($_POST['submit'])) {
    $password = $_POST['password'];

    // Regex for strong password
    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";

    if (preg_match($pattern, $password)) {
        echo "<div class='result' style='color:green;'>✅ Strong Password</div>";
    } else {
        echo "<div class='result' style='color:red;'>❌ Weak Password. Must contain at least 8 characters, one uppercase, one lowercase, one number, and one special character.</div>";
    }
}
?>

</body>
</html>
