<?php
$con=mysqli_connect("localhost","root","");

$sql="CREATE DATABASE vansh";

if(mysqli_query($con, $sql)){
  echo "Database created successfully";
}else{
  echo "Error: ".mysqli_error($con);
}
?>