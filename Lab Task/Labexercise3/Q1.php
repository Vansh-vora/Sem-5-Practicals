<doctype html>
  <html>
    <body>
      <form method="post">
        <table border="1" cellpadding="10"> 
    <tr>
          <td>Enter your first number:
        <input type="number" name="num1" ></td>
    </tr>
    <tr>
        <td>Enter your second number:
        <input type="number" name="num2" ></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="submit" name="submit" value="Submit">
      </td>
    </tr>
</table>
</form>
<?php
  if($_POST){
    echo "<h2>Results:</h2>";
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $sum = $num1 + $num2;
    $sub = $num1 - $num2;
    $mul = $num1 * $num2;
    $div = $num1 / $num2;
    echo "The sum of $num1 and $num2 is: $sum";
    echo "<br>";
    echo "The sub of $num1 and $num2 is: $sub";
    echo "<br>";
    echo "The mul of $num1 and $num2 is: $mul";
    echo "<br>";
    echo "The div of $num1 and $num2 is: $div";


  }
?>
    </body>
  </html>