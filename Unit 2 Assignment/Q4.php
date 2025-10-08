<!DOCTYPE html>
<html>
  <head>
    <title>Person & Student Details</title>
  </head>
  <body style="font-family: Arial;">
   
  <h2>Enter Student Details</h2>
  <form method="post">
      <label>Person Name:</label>
      <input type="text" name="name" required><br><br>
      <label>Age:</label>
      <input type="number" name="age" required><br><br> 
      <label>Roll Number:</label>
      <input type="text" name="rollno" required><br><br>

      <input type="submit" name="submit" value="Display Info">
  </form>

<?php
class Person{
   public $name;
    public $age;

    function __construct($name, $age) {
        $this->name=$name;
        $this->age=$age;
    }

    function displayInfo() {
      
      echo "<h3>Person Information</h3>";
      echo "Name: " . $this->name. "<br>";
      echo "Age: " . $this->age. "<br>";
      

    }
}

class Student extends Person{
  public $rollno;

  function __construct($name, $age, $rollno) {
    parent::__construct($name, $age);
    $this->rollno=$rollno;
  }

  function displayInfo() {
    echo "<div style='margin-top:20px; padding:10px; border:2px solid black; width:300px;'>";
    echo "<h3>Student Information</h3>";
    echo "Name: " . $this->name. "<br>";
    echo "Age: " . $this->age. "<br>";
    echo "Roll Number: " . $this->rollno. "<br>";
    echo "</div>";
  }
}
if(isset($_POST['submit'])) {
  $name=$_POST['name'];
  $age=$_POST['age'];
  $rollno=$_POST['rollno'];

  $student= new Student($name,$age,$rollno);
  $student->displayInfo();
}
?>
  </body>
</html>