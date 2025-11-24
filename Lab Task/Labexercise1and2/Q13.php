<doctype html>
  <html>
    <body>
      <form method="post">
  Number 1: <input type="number" name="num1"><br>
  Number 2: <input type="number" name="num2"><br>
  Operation:
  <select name="op">
    <option>Add</option>
    <option>Subtract</option>
    <option>Multiply</option>
    <option>Divide</option>
  </select><br>
  <input type="submit" name="submit">
</form>
<?php
#Create a PHP program that acts as a basic calculator. Use a form to input two numbers anda dropdown for operation (Add, Subtract, Multiply, Divide). Show the result on the same page using POST.

if ($_SERVER["REQUEST_METHOD"]=="POST") {
  $num1=$_POST['num1'];
  $num2=$_POST['num2'];
  $op=$_POST['op'];
  $result="";

  switch ($op) {
    case "Add":
      $result=$num1 + $num2;
      break;
    case "Subtract":
      $result=$num1 - $num2;
      break;
    case "Multiply":
      $result=$num1 * $num2;
      break;
    case "Divide":
      if ($num2 != 0) {
        $result=$num1 / $num2;
      } else {
        $result="Error: Division by zero";
      }
      break;
    default:
      $result="Invalid operation";
  }

  echo "Result: $result";
}
?>
    </body>
  </html>

