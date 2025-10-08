<!DOCTYPE html>
<html>
<head>
    <title>Area of Circle</title>
</head>
<body style="font-family: Arial;">
  <h2>Calculate Area of Circle</h2>
  <form method="post">
      <label>Radius:</label>
      <input type="number" name="radius" step="0.01" required>

      <input type="submit" name="submit" value="Calculate Area">
  </form>
  <?php
  class MathOperations {
      const PI=3.14159;

      public static function areaOfCircle($radius) {
        $area=self::PI * $radius * $radius;
        echo "<h3>Area of Circle: " . round($area,2) . "</h3>";
      }
  }

  if(isset($_POST['submit'])){
    $radius=$_POST['radius'];
    echo "<h3>Radius: " . $radius . "</h3>";


    MathOperations::areaOfCircle($radius);
}
?>
</body>
</html>