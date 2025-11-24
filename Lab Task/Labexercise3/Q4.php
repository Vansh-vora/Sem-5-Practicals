<doctype html>
  <html>
    <body>
      <h1>Form with multiple button</h1>
      <form method="post">
        Value 1:
        <input type="text" name="val1">
        <br><br>
        Value 2:
        <input type="text" name="val2">
        <br><br>
        <input type="submit" name="add" value="Add">
        <input type="submit" name="subtract" value="Sub">
        <input type="submit" name="multiply" value="mul">

      </form>
      <?php
      if($_POST){
        $a= $_POST['val1'];
        $b= $_POST['val2'];

        echo "<h2>Results:</h2>";
        if(isset($_POST['add'])){
          $sum=$a + $b;
          echo "The sum of $a and $b is: $sum";

        }
        if(isset($_POST['subtract'])){
          $subt=$a-$b;
          echo "The sub of $a and $b is: $subt";
        }
        if(isset($_POST['multiply'])){
          $mull=$a * $b;
          echo "The mul of $a and $b is: $mull";
        }
      }
      ?>
    </body>
  </html>