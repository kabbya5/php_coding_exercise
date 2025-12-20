<?php 

function maximumSubarray(array $array):int{

    $max_sum = $array[0];
    $current_sum = $array[0];
    $values = [$array[0]];

    for($i = 1; $i < count($array); $i++){
        $current_sum = max($array[$i], $current_sum + $array[$i]);
        $max_sum = max($max_sum, $current_sum);
    }

    return $max_sum;
}

$array = [-2, 1, -3, 4, -1, 2, 1, -5, 4];
echo maximumSubarray($array);