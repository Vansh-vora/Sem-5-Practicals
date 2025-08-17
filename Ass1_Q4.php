<html>
  <body>
<?php
// Take 5 string variables, concate them and display it individualy and
// concatinated sentence in a table.
$str1 = "My name";
$str2 = "is";
$str3 = "Vansh";
$str4 = "Vora";  
$str5 = "hehe";
$conc=$str1.$str2.$str3.$str4.$str5;
?>
<table border="1">
  <tr>
    <td>String 1</td>
    <td><?php echo $str1; ?></td>
</tr>
  <tr>
    <td>String 2</td>
    <td><?php echo $str2; ?></td>
  </tr>
  <tr>
    <td>String 3</td>
    <td><?php echo $str3; ?></td>
  </tr>
  <tr>
    <td>String 4</td>
    <td><?php echo $str4; ?></td>
  </tr>
  <tr>
    <td>String 5</td>
    <td><?php echo $str5; ?></td>
  </tr>
  <tr>
    <td>Concatenated String</td>
    <td><?php echo $conc; ?></td>
  </tr>
</table>
</body>
</html>