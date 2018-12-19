<?php
// See instructions.txt for problem description

// Example for testing
$a = array(5, 6, 7);
$b = array(3, 6, 10);

function compareTriplets($a, $b) {
    $aliceScore = 0;
    $bobScore = 0;

    for ($i = 0; $i < 3; $i++) {
        if ($a[$i] > $b[$i]) {
            $aliceScore++;
        }
        if ($a[$i] < $b[$i]) {
            $bobScore++;
        }
        if ($a[$i] === $b[$i]) {
            ;
        }
    }

    print_r(array($aliceScore, $bobScore));
}

compareTriplets($a, $b);

?>
