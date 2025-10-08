<!DOCTYPE html>
<html>
<head>
  <title>Date Difference Calculator</title>
</head>
<body style="font-family:Arial, sans-serif;">
  <h2>Find Difference Between Two Dates</h2>
  <form method="post">
    <label>Enter your Birth Date:</label>
    <input type="date" name="birthdate" required>
    <br><br>
    <input type="submit" value="Calculate Difference">
  </form>

<?php
if(isset($_POST['birthdate'])) {
  $birthdate=$_POST['birthdate'];
  $today=date("Y-m-d");

  $birth=new DateTime($birthdate);
  $current=new DateTime($today);

  $diff=$birth->diff($current);

  echo "<h3>Your Birth Date: $birthdate</h3>";
  echo "<h3>Current Date: $today</h3>";
  echo "<h3>Difference:</h3>";
  echo "Years: " . $diff->y . "<br>";
  echo "Months: " . $diff->m . "<br>";
  echo "Days: " . $diff->d . "<br>";

}
?>
</body>
</html>