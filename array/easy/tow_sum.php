<?php 

function twoSum(array $nums, int $target):array{
    $num_map = [];

    foreach($nums as $key => $num){
        $secound_num = $target - $num;

        if(array_key_exists($secound_num, $num_map)){
            return [$num_map[$secound_num], $key];
        }

        $num_map[$num] = $key;
    }

    return [];
}

$nums = [2, 5, 7, 11, 15];
$target = 9;

print_r(twoSum($nums, $target));