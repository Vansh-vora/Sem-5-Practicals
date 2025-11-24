<html>
  <body>
    <h2> Department Employees (Sorted)</h2>

    <?php
    $departments=array(
      "HR"=>array("Girish","Neha","Puja"),
      "Account"=>array("Asha","Rehan","Tina"),
      "Sales"=>array("Twisha","Keyuri","Rohit")
    );
    foreach($departments as $dept=>&$employees){
      sort($employees);
    }

    foreach($departments as $dept=>$employees){
      echo "<b>$dept Department:</b><br>";
      foreach($employees as $emp){
          echo "- ".ucfirst($emp)."<br>";
      }
      echo "<br>";
    }
    ?>
</body>
</html>