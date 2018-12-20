<?php
// Example array for testing
$c = array(0, 0, 1, 0, 0, 1, 0);

function jumpingOnClouds($c) {
  $jumps = 0;

  for ($i = 0; $i < count($c) - 1; $i++) {
    if ($c[$i + 2] === 0) {
      $i++;
    }
    ++$jumps;
  }
  echo "Total jumps: $jumps\n";
}
jumpingOnClouds($c);
?>
