<?php

function uniquePaths($m, $n) {
    return binomialCoefficient($m + $n - 2, $m - 1);
}

function binomialCoefficient($n, $k) {
    $result = 1;
    if ($k > $n - $k) {
        $k = $n - $k;
    }
    for ($i = 0; $i < $k; $i++) {
        $result *= ($n - $i);
        $result /= ($i + 1);
    }
    return $result;
}

echo uniquePaths(4, 4);  // Output: 20

?>
