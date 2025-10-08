<!DOCTYPE html>
<html>
<head>
    <title>Validate Mobile Number using Regex</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        input[type="text"] {
            padding: 8px;
            width: 200px;
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

<h2>Mobile Number Validation</h2>

<form method="post">
    Enter Mobile Number: 
    <input type="text" name="mobile" placeholder="Enter 10-digit number" required>
    <br><br>
    <input type="submit" name="submit" value="Validate">
</form>

<?php
if (isset($_POST['submit'])) {
    $mobile = $_POST['mobile'];

    // Regex: must contain exactly 10 digits (0-9)
    if (preg_match("/^[0-9]{10}$/", $mobile)) {
        echo "<div class='result' style='color:green;'>✅ Valid Mobile Number</div>";
    } else {
        echo "<div class='result' style='color:red;'>❌ Invalid Mobile Number (must be exactly 10 digits)</div>";
    }
}
?>

</body>
</html>
