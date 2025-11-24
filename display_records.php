<?php
$con=mysqli_connect("localhost","root","","mydb1");

$result=mysqli_query($con, "SELECT * from students");

echo "<table border='1'>
<tr>
<th>ID</th><th>Name</th><th>Email</th><th>Age</th><th>Action</th>
</tr>";

while($row=mysqli_fetch_array($result)){
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
   echo "<td>".$row['name']."</td>";
    echo "<td>".$row['email']."</td>";
     echo "<td>".$row['age']."</td>";
  echo "<td>
  <a href='update.php?id=".$row['id'].">Update</a> |
  <a href='delete.php?id=".$row['id'].">Delete</a>
  </td>";
  echo "<tr>";
}
echo "</table>";
?>