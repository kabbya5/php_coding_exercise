<?php 

function removeDoplicate(&$nums){
    $n = count($nums);
    if($n <= 2) return $nums;

    $k = 2;

    for($i = 2; $i < $n; $i++){
        if($nums[$i] != $nums[$k-2]){
            $nums[$k] = $nums[$i];
            $k++;
        }
    }

    return $nums;
}

$nums = [1,1,1,2,2,3];
print_r(removeDoplicate($nums));