<?php 

function canJam($nums) {
    $maxReach = 0;
    $n = count($nums);

    for ($i = 0; $i < $n; $i++) {

        if ($i > $maxReach) {
            return false;
        }

        $maxReach = max($maxReach, $i + $nums[$i]);

        if ($maxReach >= $n - 1) {
            return true;
        }
    }

    return true;
}

$nums = [2,3,1,1,4];
$nums2 = [3,2,1,0,4];

echo canJam($nums);
echo canJam($nums2);