
<?php 

function sumFourDivisors($nums){
    $total = 0;

    foreach($nums as $n){
        $count = 0;
        $sum = 0;

        for ($i = 1; $i * $i <= $n; $i++){
            if($n % $i === 0){
                $d1 = $i;
                $d2 = $n / $i;

                if($d1 == $d2){
                    $count += 1;
                    $sum += $d1;
                }else{
                    $count += 2;
                    $sum += $d1 + $d2;
                }

                if ($count > 4) break;
            }
        }

        if($count == 4){
            $total += $sum;
        }
    }  
    
    return $total;
}

$nums = [21,4,7];
echo sumFourDivisors($nums);