<?php
#Create a php program and perform the followings:
#• Create a link that sends your name and age to another page using the GET method.
#• On the second page, display a greeting using the values passed in the URL.


<a href="page2.php?name=John&age=21">Send Data</a>
<?php
$name = $_GET['name'];
$age = $_GET['age'];
echo "Hello $name, you are $age years old.";
?>
