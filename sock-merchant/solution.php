<?php
// example array for testing
$ar = array(2, 4, 10, 50, 50, 10, 20, 20, 50, 30);

$socks = array_count_values($ar);
$pairs = 0;

foreach ($socks as $color => $frequency) {
  $pairs += floor($frequency / 2);
}

print $pairs . "\n";
?>
