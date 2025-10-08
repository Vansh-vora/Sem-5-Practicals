<!DOCTYPE html>
<html>
  <head>
    <title>2D Array Matrix Display</title>
    <style>
      table {
        border-collapse:collapse;
        margin:20px;
      }
      td, th {
        border: 1px solid black;
        padding: 10px;
        text-align: center;
      }
      input {
        width:50px;
        text-align: center;
      }
      </style>
  </head>
      <body>
        <h2>Enter values for 3x3 Matrix</h2>

        <form method="post">
          <table>
            <?php
              for($i=0;$i<3;$i++){
                echo "<tr>";
                for($j=0;$j<3;$j++){
                  echo "<td><input type='text' name='matrix[$i][$j]'required</td>";
                }
                echo "</tr>";
              }
            ?>
          </table>

        <input type="submit" name="submit" value="Display Matrix">
            </form>
  <?php
  if(isset($_POST['submit'])){
    $matrix=$_POST['matrix'];

    echo "<h3>Matrix Output</h3>";
    echo "<table>";
    foreach ($matrix as $row){
      echo "<tr>";
      foreach($row as $value){
        echo "<td>" . htmlspecialchars($value) . "<td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  }
  ?>

</body>
</html>
