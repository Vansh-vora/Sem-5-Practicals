<?php
$con=mysqli_connect("localhost","root","","mydb1");

$sql="CREATE TABLE students(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
email VARCHAR(50),
age INT)";

if(mysqli_query($con,$sql)){
  echo "Table created sccessfully";

}else{
  echo"Error".mysqli_error($con);
}
?>