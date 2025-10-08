<?php
  //1. Session Login Example
  // • Create a login form (username & password).
  // • If correct, store the username in a session variable and display a welcome message.
  // • Provide a logout option that destroys the session.

  session_start();

  $correct_username="admin";
  $correct_password="admin123";

  $error= "";

  if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username ===$correct_username && $password===$correct_password){
      $_SESSION['username']=$username;
      header("Location:welcome.php");
      exit();
    }else{
      $error="Invalid username or password";
    }
  }
  ?>
  <!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body { font-family: Arial; margin: 50px; }
        input { padding: 8px; margin: 5px 0; width: 250px; }
        input[type="submit"] { width: auto; }
        .error { color: red; }
    </style>
</head>
<body>

<h2>Login Form</h2>
<form method="post" action="">
    Username: <br>
    <input type="text" name="username" required><br>
    Password: <br>
    <input type="password" name="password" required><br>
    <input type="submit" name="login" value="Login">
</form>

<?php
if($error != ""){
  echo "<p class='error'>$error</p>";
}
?>

</body>
</html>
