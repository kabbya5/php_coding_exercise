<?php 

function move_all_zeroes(array $arr):array{

    $left = 0;

    for($right = 0; $right < count($arr); $right++){
        $temp = $arr[$right];
        if($temp !== 0){
            $arr[$right] = $arr[$left];
            $arr[$left]  = $temp;
            $left++;
        };
    }

    return $arr;
}

$arr = [0,1,0,3,12];

print_r(move_all_zeroes($arr));