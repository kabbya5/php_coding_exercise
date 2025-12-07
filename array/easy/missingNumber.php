<?php 

function findMissingNumber(array $arr): int{
    $n = count($arr);
    $expected = ($n * ($n + 1)) / 2;

    $actual = 0;

    foreach($arr as $num){
        $actual += $num;
    }

    return $expected;
}

$arr = [1,2,3,5];

echo findMissingNumber($arr);