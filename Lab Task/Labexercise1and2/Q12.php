<doctype html>
  <html>
    <body>  
      <form method="POST">
        Name:
        <input type="text" name="name"><br>
        Age:
        <input type="text" name="age"><br>
        Gender:
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <br>
        Hobbies:
        <input type="checkbox" name="hobbies[]" value="Reading">Reading
        <input type="checkbox" name="hobbies[]" value="Traveling">Traveling
        <input type="checkbox" name="hobbies[]" value="Gaming">Gaming
        <br>
        <input type="submit" value="Submit">
</form>
<?php
#Create an HTML form that collects:
#• Name
#• Age
#• Gender (radio buttons)
#• Hobbies (checkboxes)
#Use the POST method to display the submitted data in a formatted table using PHP.

if ($_SERVER["REQUEST_METHOD"]=="POST") {
  $name=$_POST['name'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  $hobbies=isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
  echo "<h2>Submitted Data:</h2>";
  echo "<table border='1'>";
  echo "<tr><th>Name</th><td>$name</td></tr>";
  echo "<tr><th>Age</th><td>$age</td></tr>";
  echo "<tr><th>Gender</th><td>$gender</td></tr>";
  echo "<tr><th>Hobbies</th><td>" . implode(", ", $hobbies) . "</td></tr>";
  echo "</table>";  
}
?>
    </body>
  </html>