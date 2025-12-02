<?php 

function validParentheses(string $string):bool{
    $stack = [];
    $parentheses_check = [')' => '(', '}' => "{", ']' => "["];
    $parentheses = str_split($string);

    foreach($parentheses as $parenthes){
        if(in_array($parenthes, $parentheses_check)){
            array_push($stack, $parenthes);
        }elseif(isset($parentheses_check[$parenthes])){
            if(empty($stack) || array_pop($stack) !== $parentheses_check[$parenthes]){
                return false;
            }
        }
    }

    return empty($stack) ? true : false;

}


echo validParentheses('[()]}');
