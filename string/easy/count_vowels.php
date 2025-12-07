<?php 

function count_vowel($string){
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;

    $string = strtolower($string);

    for($i = 0; $i < strlen($string); $i++){
        if(in_array($string[$i],$vowels)){
            $count++;
        }
    }

    return $count;
}

$string = 'Hello world';

echo count_vowel($string);