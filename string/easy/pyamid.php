<?php 

function pyramid(int $height):string{
    $pyramid = '';
    for($i = 0; $i < $height;$i++){
        $pyramid .= str_repeat(' ',$height - $i - 1);
        $pyramid .= str_repeat('*', $i * 2 +1);
        $pyramid .= "\n";
    }

    return $pyramid;
}

echo pyramid(7);