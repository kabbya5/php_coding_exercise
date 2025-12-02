<?php 

function printA($height){

    $a = '';
    $mid = intdiv($height,2);

    for($i = 0; $i < $height; $i++){
        $a .= str_repeat(' ', $height - $i - 1);
        if($i == $mid ){
            $a .= str_repeat('*', $i * 2 + 1);
        }
        else{
            $width = $i * 2 + 1;

            for($j = 0; $j <= $width; $j++){
                if($j == 0 || $j == $width - 1){
                    $a .= "*";
                } else {
                    $a .= " ";
                }
            }
        }
        

        $a .= "\n";
    }

    return $a;
}

echo printA(5);
