<?php
$con=mysqli_connect("localhost","root","","mydb1");
$id=$_GET['id'];

if(isset($_POST['update'])){
  $age=$_POST['age'];
  mysqli_query($con,"UPDATE students SET age='$age' WHERE id=$id");
  echo "Record Updated";
}
?>
<form method="post">
  New Age:<input type="text" name="age">
  <input type="submit" value="update" name="update">
</form>