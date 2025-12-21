<?php 

function rotateArray(array $arr, int $k){

    $n = count($arr);
    if($n == 0 || $k == 0) return $arr;

    $k = $k % $n;
    if($k == 0) return $arr;

    $end = array_slice($arr,-$k);
    $start = array_slice($arr, 0, $n - $k);

    return array_merge($end, $start);
}
$arr = [1,2,3,4,5];
$k = 2;
print_r(rotateArray($arr, $k));

