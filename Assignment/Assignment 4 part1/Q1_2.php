<?php
session_start();

$correct_username="admin";
$correct_password="1234";

$username=$_POST['username'];
$password=$_POST['password'];

if($username==$correct_username && $password==$correct_password){
  $_SESSION['username']=$username;
  header("Location: Q1_3.php");
}else{
  echo "Invalid Login <a href='Q1_1.php'>Try Again</a>";
}
?>