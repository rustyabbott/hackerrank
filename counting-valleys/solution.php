<?php
// See instructions.txt for full problem description

// Examples for testing
$n = 12;
$s = array('D', 'D', 'U', 'U', 'D', 'D', 'U', 'D', 'U', 'U', 'U', 'D');

function countingValleys($n, $s) {
  $altitude = 0;
  $valley = 0;

  for ($i = 0; $i < $n; $i++) {
    if ($s[$i] === 'D') {
      $altitude--;
    }
    if ($s[$i] === 'U') {
      $altitude++;
    }
    if ($altitude === 0 && $s[$i] === 'U' && $i !== 0) {
      $valley++;
    }
  }

  print $valley . "\n";
}

countingValleys($n, $s);
?>
