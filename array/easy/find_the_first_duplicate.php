<?php 

function find_the_duplicate($arr){
    $count = [];

    foreach($arr as $num){
        if(array_key_exists($num,$count)){
            return $num;
        }

        $count[$num] = 1;
    }
}

$arr = [2, 1, 3, 5, 3, 2];

echo find_the_duplicate($arr);