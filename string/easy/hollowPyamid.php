<?php 

function hollowPyramid(int $height):string{
    $pyramid = '';
    $height = $height;
    for ($i = 0; $i < $height; $i++){
        $pyramid .= str_repeat(' ',  $height - $i - 1);
        $width = $i * 2 +1;
        for($j = 1; $j <= $width; $j++){
            if($i == $height - 1 || $j == 1 || $j == $width){
                $pyramid .= "*";
            }else{
                $pyramid .= " ";
            }
        }
        $pyramid .= "\n";
    }

    return $pyramid;
}

echo hollowPyramid(4);

echo hollowPyramid(5);