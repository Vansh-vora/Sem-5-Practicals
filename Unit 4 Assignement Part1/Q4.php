<!DOCTYPE html>
<html>
<head>
    <title>Email Validation using Regex</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        input[type="text"] {
            padding: 8px;
            width: 300px;
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

<h2>Email Validation</h2>

<form method="post">
    Enter Email: 
    <input type="text" name="email" placeholder="example@domain.com" required>
    <br><br>
    <input type="submit" name="submit" value="Validate">
</form>

<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    // Regex for email validation
    $pattern = "/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";

    if (preg_match($pattern, $email)) {
        echo "<div class='result' style='color:green;'>✅ Valid Email Address</div>";
    } else {
        echo "<div class='result' style='color:red;'>❌ Invalid Email Address</div>";
    }
}
?>

</body>
</html>
