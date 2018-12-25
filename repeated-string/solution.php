<?php
// Sample test case. See README.md for more.
$s = 'aba';
$n = 10;

function repeatedString($s, $n) {
  $remainderNum = $n % strlen($s);
  $remainderString = substr($s, 0, $remainderNum);
  print_r(substr_count($s, "a") * floor($n / strlen($s)) + substr_count($remainderString, "a") . "\n");
}
repeatedString($s, $n);
?>
