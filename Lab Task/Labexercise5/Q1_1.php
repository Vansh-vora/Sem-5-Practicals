<?php
$name=$_POST['name'];
$price=$_POST['price'];

$products=[];

for($i=0;$i<count($name);$i++){
  $products[]=[
    "name"=>$name[$i],
    "price"=>$price[$i]
  ];
}
echo "<h2>All Products</h2>";
echo "<table border='1' cellpadding='10'>
<tr><th>Name</th><th>Price</th></tr>";

foreach ($products as $p){
      echo "<tr><td>{$p['name']}</td><td>{$p['price']}</td></tr>";
}

echo "</table>";

echo "<h2>Products Price > 500</h2>";
echo "<table border='1' cellpadding='10'>
<tr><th>Name</th><th>Price</th></tr>";

foreach ($products as $p) {
    if ($p['price'] > 500) {
        echo "<tr><td>{$p['name']}</td><td>{$p['price']}</td></tr>";
    }
}

echo "</table>";
?>

