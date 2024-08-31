<?php
function bracketCombinations($n)
{
    return fictorial(2*$n)/(fictorial($n+1)*fictorial($n)); // binomial coefficient formula
}
function fictorial($v){
    $r=1;
    for ($i=$v; $i >=1 ; $i--) { 
        $r*=$i;  
    }
    return $r;
}

echo bracketCombinations(3);

/**  
*   Result will be 5
*/
?>
