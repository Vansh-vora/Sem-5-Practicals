<?php
$con=mysqli_connect("localhost","root","","mydb1");

$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];

$sql= "INSERT INTO students(name,email,age) VALUES('$name','$email','$age')";

if(mysqli_query($con,$sql)){
  echo "Record Inserted Successfully!";
}else{
  echo "Error:".mysqli_connect($con);
}
?>