<?php 

function printA($height){
    $mid = intdiv($height, 2);
    $a = '';

    for($i = 0; $i < $height; $i++){

        for($s = 0; $s < ($mid - $i); $s++){
            $a .= " ";
        }

        // Width of that row
        $width = 2 * $i + 1;

        for($j = 1; $j <= $width; $j++){

            // Top peak
            if ($i == 0) {
                $a .= "*";
                break;
            }

            // Middle bar
            if($i == $mid){
                $a .= "*";
            }
            // Side stars
            else if($j == 1 || $j == $width){
                $a .= "*";
            }
            // Hollow space
            else{
                $a .= " ";
            }
        }

        $a .= "\n";
    }

    return $a;
}

echo printA(7);
