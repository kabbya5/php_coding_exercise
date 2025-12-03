<?php 

function longestWord(string $str):string{

    $words = explode(' ', str_replace('!','',$str));
    $large_word = '';

    foreach($words as $word){
        $str_len = strlen($word);
        if(strlen($large_word) < $str_len){
            $large_word = $word;
        }
    }

    return $large_word;
}

$string = "I love Programin";

echo longestWord($string);