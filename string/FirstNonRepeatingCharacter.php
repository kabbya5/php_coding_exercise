<?php 

function nonRepeatingCharacter(string $string):string{
    $map = [];

    for($i = 0; $i < strlen($string); $i++){
        $char = $string[$i];

        if(array_key_exists($char, $map)){
            $map[$char]++;
        }else{
            $map[$char] = 1;
        }
    }

    foreach($map as $key => $char){
        if($char == 1){
            return $key;
        }
    }

    return '';

    
}

$string = 'abecabcd';

echo nonRepeatingCharacter($string);