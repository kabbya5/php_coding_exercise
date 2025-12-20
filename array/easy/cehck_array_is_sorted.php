<?php 

function checkArrayIsSorted(array $arr):bool{
    $left = 0;

    for($right = 1; $right < count($arr); $right++){
        if($arr[$left] > $arr[$right]){
            return false;
        }
        $left += 1;
    }

    return true;
}

$arr =[1, 3, 2, 4];

echo checkArrayIsSorted($arr);
