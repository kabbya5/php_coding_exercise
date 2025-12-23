<?php 

function maxProfit(array $prices): int{

    $profit = PHP_INT_MIN;
    $buy = PHP_INT_MAX;

    foreach($prices as $day => $price){
        $buy = min($buy, $price);
        $profit = max($profit, $price - $buy);
    }

    return $profit;
}

$prices = [7,1,5,3,6,4];

echo maxProfit($prices);