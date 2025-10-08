<!DOCTYPE html>
<html>
<head>
  <title>Calulate Days between Two Dates</title>
</head>
<body style="font-family:Arial, sans-serif;">
  <h2>Find Difference Between Two Dates</h2>
  <form method="post">
    <label>Enter Start Date:</label>
    <input type="date" name="startdate" required>
    <br><br>
    <label>Enter End Date:</label>
    <input type="date" name="enddate" required>
    <br><br>
    <input type="submit" name="submit" value="Calculate Difference">
  </form>
<?php
if(isset($_POST['submit'])){
  $startdate=$_POST['startdate'];
  $enddate=$_POST['enddate'];

  $start=new DateTime($startdate);
  $end=new DateTime($enddate);

  $diff=$start->diff($end);

  echo "<h3>Start Date: $startdate</h3>";
  echo "<h3>End Date: $enddate</h3>";
  echo "<h3>Difference:</h3>";
  echo "Years: " . $diff->y . "<br>";
  echo "Months: " . $diff->m . "<br>";
  echo "Days: " . $diff->d . "<br>";
}
?>
</body>
</html>