<?php 

function BuyAndSale($nums){
    $profit = 0;
    $n = count($nums);

    for($i = 1; $i < $n; $i++){
        if($nums[$i] > $nums[$i - 1]){
            $profit += $nums[$i] - $nums[$i -1];
        }
    }

    return $profit;
}

$nums = [7,1,5,3,6,4];
echo BuyAndSale($nums);