<?php

//problem found on https://www.pbinfo.ro/probleme/11/vocale

//function to uppercase the vowels from a $text variable which holds a string;

function upperCaseVowels($text){

    $str = strtolower($text);
    $len = strlen($text);
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    if ($len <= 20){
        for ($i = 0; $i < $len; $i++){
            if (in_array($str[$i], $vowels)){
                $text = str_replace($str[$i], strtoupper($str[$i]), $text);
            }
        }
    }
    echo $text;
}


$text = fgets(STDIN);

upperCaseVowels($text);


?>