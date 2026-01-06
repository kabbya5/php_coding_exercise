<?php 

function isPrime($num){
    if($num <= 1) return false;

    for($i = 2; $i <= sqrt($num); $i++){
        if($num % $i == 0){
            return false;
        }
    }

    return true;
}

$num = 100;

for($i = 0; $i < $num; $i++){
    if(isPrime($i)){
        echo $i . " ";
    }
}