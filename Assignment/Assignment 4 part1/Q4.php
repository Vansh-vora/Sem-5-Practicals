<?php
if(!isset($_COOKIE['user'])){
  setcookie("user","JohnDoe",time()+86400,"/");
  $message="Cookie 'user'is created";
}else{
  $message="Cookie 'user' is already set: ". $_COOKIE['user'];
}

if(isset($_POST['delete'])){
  setcookie("user","JohnDoe",time()-3600,"/");
  $message="Cookie 'user' has been deleted!";
  header("Location: Q4.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>

<h2>PHP Cookie Example</h2>
<p><?php echo $message; ?></p>

<form method="post">
    <input type="submit" name="delete" value="Delete Cookie">
</form>

</body>
</html>