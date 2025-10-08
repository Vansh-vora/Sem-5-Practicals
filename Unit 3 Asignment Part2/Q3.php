<!DOCTYPE html>
<html>
<head>
    <title>Number Display</title>
</head>
<body style="font-family: Arial;">

<h2>Display Numbers 1-10 with Hyphens</h2>

<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    if ($i < 10) {
        echo "-";
    }
}
?>
</body>
</html>
