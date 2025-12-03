<?php 

function checkAnagram($str1, $str2):bool{
    $str1 = strtolower(str_replace(' ', '', $str1));
    $str2 = strtolower(str_replace(' ', '', $str2));

    if(strlen($str1) !== strlen($str2)) return false;

    $freq = [];

    for($i = 0; $i < strlen($str1); $i++){
        $char = $str1[$i];
        if(array_key_exists($char, $freq)){
            $freq[$char] += 1;
        }else{
            $freq[$char] = 1;
        }
    }

    for($i = 0; $i < strlen($str2); $i++){
        $char = $str2[$i];

        if(!isset($freq[$char]) || $freq[$char] == 0){
            return false;
        }

        $freq[$char] -= 1;
    }

    return true;
}

echo checkAnagram('listen', 'silent');