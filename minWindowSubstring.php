<?php

function MinWindowSubstring($strArr)
{
    $main = $strArr[0];
    $sub = $strArr[1];
    $sub_count = $found_string=[];
    foreach (str_split($sub) as $k => $v) {
        $sub_count[$v] = $sub_count[$v] ? $sub_count[$v] + 1 : 1;
    }
    for ($i=count(str_split($sub)); $i <= count(str_split($main)); $i++) { 
        echo getResult(substr($main,0,$i),$sub)."<br>";
    }

    // code goes here
    return $strArr;
}

function getResult($sub_main,$sub){
    $result='';

return $sub_main;
}
function a(){
    ;
    foreach (str_split($sub) as $k => $v) {
        $sub_count[$v] = $sub_count[$v] ? $sub_count[$v] + 1 : 1;
    }

}

// keep this function call here
echo MinWindowSubstring(['ahffaksfajeeubsne', 'jefaa']);

?>
