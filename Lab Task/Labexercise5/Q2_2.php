<?php
$items = $_POST['item'];
$prices = $_POST['price'];
$qtys = $_POST['qty'];

echo "<h2>Restaurant Bill</h2>";
echo "<table border='1' cellpadding='10'>
<tr>
    <th>Item</th>
    <th>Price (₹)</th>
    <th>Qty</th>
    <th>Total (₹)</th>
</tr>";

$subtotal = 0;

for ($i = 0; $i < count($items); $i++) {

    // Correct variables
    $item = $items[$i];
    $price = $prices[$i];
    $qty = $qtys[$i];

    $total = $price * $qty;
    $subtotal += $total;

    echo "<tr>
            <td>$item</td>
            <td>$price</td>
            <td>$qty</td>
            <td>$total</td>
          </tr>";
}

echo "</table>";

$gst = $subtotal * 0.18;
$final = $subtotal + $gst;

echo "<h3>Subtotal: ₹$subtotal</h3>";
echo "<h3>GST (18%): ₹" . number_format($gst,2) . "</h3>";
echo "<h2>Total Payable: ₹" . number_format($final,2) . "</h2>";
?>
