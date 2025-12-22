<?php 

function arraySum($arr, $index = 0){

    if($index >= count($arr)){
        return 0;
    }

    return $arr[$index] + arraySum($arr, $index + 1);
}
$arr = [1,2];
echo arraySum($arr);