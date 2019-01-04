<?php
// Test case example, output should be 19
$arr = array(
  array(1, 1, 1, 0, 0, 0),
  array(0, 1, 0, 0, 0, 0),
  array(1, 1, 1, 0, 0, 0),
  array(0, 0, 2, 4, 4, 0),
  array(0, 0, 0, 2, 0, 0),
  array(0, 0, 1, 2, 4, 0)
);

function hourglassSum($arr) {
  $hourglassArray = [];

  for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
      array_push($hourglassArray, $arr[$i][$j] + $arr[$i][$j + 1] + $arr[$i][$j + 2] + $arr[$i + 1][$j + 1] + $arr[$i + 2][$j] + $arr[$i + 2][$j + 1] + $arr[$i + 2][$j + 2]);
    }
  }
  print(max($hourglassArray) . "\n");
}

hourglassSum($arr);
?>
