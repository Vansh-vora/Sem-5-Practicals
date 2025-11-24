<?php
$nums=$_POST['num'];

echo "Reverse Order:<br>";
for($i=count($nums)-1;$i>=0;$i--){
  echo $nums[$i]."<br>";
}
?>