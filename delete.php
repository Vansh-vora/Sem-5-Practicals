<?php
$con = mysqli_connect("localhost","root","","mydb1");
$id = $_GET['id'];

mysqli_query($con,"DELETE FROM students WHERE id=$id");

echo "Record Deleted!";
?>
