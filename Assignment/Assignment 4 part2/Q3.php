<?php
$string="Order ID: 2456 ,Amount:500";

preg_match_all('/\d+/',$string,$matches);

echo "Numbers found: ".implode(", ",$matches[0]);
?>