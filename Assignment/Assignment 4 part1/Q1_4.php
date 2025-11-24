<?php
session_start();
session_unset();
session_destroy();
header("Location: Q1_1.php");
exit();
?>