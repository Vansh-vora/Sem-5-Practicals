<?php
$count=$_POST['count'];
?>
<h2>Enter Menu Item Details </h2>

<form action="Q2_2.php" method="post">
  
  <?php
  for($i=0;$i<$count;$i++){
    echo "<b>Item ".($i+1)."</b></br>";
    echo "Item Name: <input type='text' name='item[]' required><br>";
    echo "Price: <input type='number' name='price[]' required><br>";
    echo "Quantity: <input type='number' name='qty[]' required><br><br>";
  }
  ?>
  <input type="submit" value="Generate Bill">
</form>