<?php
$count=$_POST['count'];
?>

<form action="Q1_1.php" method="post">
  <h2>Enter Product Details</h2>
  <?php
  for($i=0;$i<$count;$i++){
    echo "<b>Product ".($i+1)."</b><br>";
    echo "Name: <input type='text' name='name[]' required><br>";
    echo "Price: <input type='number' name='price[]' required><br>";
  }
  ?>
  <input type="submit" value="Show Products">
</form>