<Doctype html>
  <html>
    <body>
<?php
#Take two numbers as PHP variables and perform basic arithmetic (add, subtract, multiply,divide) and display the results in an HTML list.
$a=10;
$b=5;
$add=$a + $b;
$sub=$a-$b;
$mul=$a * $b;
$div= $a / $b;
?>
<ul>
  <li>Addition: <?php echo $add; ?></li>
  <li>Subtraction: <?php echo $sub; ?></li>
  <li>Multiplication: <?php echo $mul; ?></li>
  <li>Division: <?php echo $div; ?></li>
</ul>
</body>
</html>