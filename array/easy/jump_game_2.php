<?php 

function jump($nums){
    $n = count($nums);
    if($n <= 1) return 0;

    $jumps = 0;
    $currentEnd = 0;
    $farthest = 0;

    for($i = 0; $i < $n - 1; $i++){
        $farthest = max($farthest, $i +  $nums[$i]);
        if($i == $currentEnd){
            $jumps ++;
            $currentEnd = $farthest;
        }
    }

    return $jumps;
}

$nums = [2,3,1,1,4];

echo jump($nums);