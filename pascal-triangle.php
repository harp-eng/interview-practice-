<?php
function pascalsTriangle($n)
{
    for ($i = 0; $i < $n; $i++) {
        $value = 1;
        for ($k = 0; $k <= $i; $k++) {
            echo $value . ' ';
            $value = $value * ($i - $k) / ($k + 1);
        }
        echo '<br>';
    }
}

pascalsTriangle(10);

/**  
*   Result
*   1
*   1 1
*   1 2 1
*   1 3 3 1
*   1 4 6 4 1
*   1 5 10 10 5 1
*   1 6 15 20 15 6 1
*   1 7 21 35 35 21 7 1
*   1 8 28 56 70 56 28 8 1
*   1 9 36 84 126 126 84 36 9 1
*/
?>
