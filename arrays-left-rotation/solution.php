<?php
// Test case to print array(5, 1, 2, 3, 4)
$a = array(1, 2, 3, 4, 5);
$d = 4;

function rotLeft($a, $d) {
  $newArray = array();
  $n = count($a);

  for ($i = 0; $i < $n; $i++) {
    if ($i + $d >= $n) {
      $newArray[$i] = $a[$i + $d - $n];
    } else {
      $newArray[$i] = $a[$i + $d];
    }
  }
  print_r($newArray);
}

rotLeft($a, $d);
?>
