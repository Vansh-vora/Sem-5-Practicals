<?php
#Create a program that counts how many times a user has refreshed a page using session variables.
#• Display the count value each time the page loads.

session_start();

if(isset($_SESSION['count'])){
  $_SESSION['count']+=1;
}else{
  $_SESSION['count']=1;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Refresh Counter</title>
</head>
<body>

<h2>Page Refresh Counter</h2>
<p>You have refreshed this page <strong><?php echo $_SESSION['count']; ?></strong> times.</p>
</body>
</html>

