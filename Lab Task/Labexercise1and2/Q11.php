<?php
#Create two PHP files:
#• header.php with a heading
#• main.php that includes header.php using both include and require

<?php
include("header.php");
require("header.php");
echo "This is main page content.";
?>
