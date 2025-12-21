<?php 

function findPairs(array $arr, int $target):array{
    $pairs = [];

    $check = [];

    for($i = 0; $i < count($arr); $i++){
        $temp = $arr[$i];
        $last = $target - $temp;

        if(array_key_exists($last, $check)){
            array_push($pairs,[$check[$last],$temp]);
            continue;
        }

        $check[$temp] = $temp;
    }

    return $pairs;
}

$arr = [1,2,3,4,5,6];

print_r(findPairs($arr, 7));