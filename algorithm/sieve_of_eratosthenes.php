<?php 

$num = 2;

$prime = array_fill(0, $num+1, true);
$prime[0] = $prime[1] = false;

for($i = 2; $i * $i <= $num; $i++){
    if($prime[$i]){
        for($j = $i * $i; $j<= $num;$j+=$i){
            $prime[$j] = false;
        }
    }
}

print_r($prime);