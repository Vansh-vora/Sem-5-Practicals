<!DOCTYPE html>
<html>
  <head>
    <title>Next Sundays and Thursdays</title>
</head>
<body style="font-family:Arial;">

<h2>Next Six Sundays</h2>
<ul>
  <?php
  for ($i= 1; $i<= 6; $i++){
    $nextSunday= strtotime("next Sunday +".($i+1)."week");
    echo "<li>" .date("l,d-m-Y",$nextSunday)."</li>";

  }
?>
</ul>

<h2>Next Thursdays</h2>
<?php
$nextThursday= strtotime("next Thursdays");
echo "<p>". date("l, d-m-Y", $nextThursday)."<p>";
?>
</body>
</html>