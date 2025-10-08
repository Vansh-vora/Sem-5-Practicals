<!DOCTYPE html>
<html>
<head>
    <title>Check if String Starts with "Hello"</title>
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

<h2>Check if String Starts with "Hello"</h2>

<form method="post">
    Enter a String: 
    <input type="text" name="text" placeholder="Type something..." required>
    <br><br>
    <input type="submit" name="submit" value="Check">
</form>

<?php
if (isset($_POST['submit'])) {
    $text = $_POST['text'];

    // Regex to check if string starts with "Hello"
    if (preg_match("/^Hello/", $text)) {
        echo "<div class='result' style='color:green;'>✅ The string starts with 'Hello'</div>";
    } else {
        echo "<div class='result' style='color:red;'>❌ The string does not start with 'Hello'</div>";
    }
}
?>

</body>
</html>
