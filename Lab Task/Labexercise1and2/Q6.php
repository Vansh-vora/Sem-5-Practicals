<?php
#Given two numbers $a = 25 and $b = 40, write conditions using:
#• Greater than
#• Less than
#• Greater than or equal to
#• Less than or equal to
#Display the result for each.

$a = 25;
$b = 40;

$conditions =[
  '>' => 'greater than',
  '<' => 'less than',
  '>=' => 'greater than or equal to',
  '<=' => 'less than or equal to'
];

foreach ($conditions as $operator => $text) {
  $result = false;
  switch ($operator) {
    case '>':
      $result = $a > $b;
      break;
    case '<':
      $result = $a < $b;
      break;
    case '>=':
      $result = $a >= $b;
      break;
    case '<=':
      $result = $a <= $b;
      break;
  }

}
if ($result) {
    echo "$a is $text $b\n";
} else {
    echo "$a is not $text $b\n";
}
?>