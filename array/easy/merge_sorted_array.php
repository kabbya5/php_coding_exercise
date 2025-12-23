<?php 

function merge($nums1, $m, $nums2, $n){
    $i = $m -1;
    $j = $n - 1;
    $k = $n + $m -1;
    while($j >= 0){
        if($i >= 0 && $nums1[$i] > $nums2[$j]){
            $nums1[$k] = $nums1[$i];
            $i--;
        }else{
            $nums1[$k] = $nums2[$j];
            $j--;
        }
        $k--;
    }

    return $nums1;
}

$nums1 = [1,2,4,5,7,0,0,0];
$nums2 = [2,3,6];
$m = 5;
$n = 3;

print_r(merge($nums1, $m, $nums2, $n));