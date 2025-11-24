<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter Marks: 
    <input type="number" name="marks" min="0" max="100" required>
    <button type="submit">Check Grade</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marks = $_POST['marks'];

    if ($marks >= 90) {
        echo "Grade: A";
    } 
    else if ($marks >= 75 && $marks <= 89) {
        echo "Grade: B";
    } 
    else if ($marks >= 50 && $marks <= 74) {
        echo "Grade: C";
    } 
    else {
        echo "Grade: Fail";
    }
}
?>

</body>
</html>
