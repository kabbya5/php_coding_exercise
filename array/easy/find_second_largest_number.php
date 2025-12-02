<?php 

function secound_largest_number(array $array):int{
    $large = PHP_INT_MIN;
    $secound_large = PHP_INT_MIN;

    for($i = 0; $i< count($array); $i++){
        $num = $array[$i];
        if($large < $num){
            $secound_large = $large;
            $large = $num;
        }else if($num > $secound_large && $num < $large){
            $secound_large = $num;
        }
    }

    return $secound_large;
}

$arr = [10,5,20, 3];

echo secound_largest_number($arr);