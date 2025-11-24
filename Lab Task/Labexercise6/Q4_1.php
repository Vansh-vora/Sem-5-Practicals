<?php
$matrix=[
  [1,2,3],
  [4,5,6],
  [7,8,9]
];

echo "<h2> 3X3 Matrix</h2>";

for($i=0;$i<3;$i++){
  for($j=0;$j<3;$j++){
    echo $matrix[$i][$j]." ";
  }
  echo "<br>";
}
?>