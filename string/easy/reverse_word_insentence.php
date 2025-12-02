<?php 

function reverssseWord(string $string):string{
    $reverse_string = [];
    $string_length = strlen($string);

    if($string_length < 1) return $string;

    $words = explode(' ', $string);
    

    foreach($words as $word){
        $left = 0; 
        $right = strlen($word) - 1;

        while($left <= $right){
            $temp = $word[$left];
            $word[$left] = $word[$right];
            $word[$right] = $temp;
            $left++;
            $right--;
        }

        $reverse_string []= $word;
    }

    return implode(' ', $reverse_string);
}
$string = "I love programming";
echo reverssseWord($string);