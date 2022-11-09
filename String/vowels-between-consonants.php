<?php

//problem taken from https://www.pbinfo.ro/probleme/972/pozitii

//the function will display the numbers of vowels placed between two consonants from a given $text string;

function vowelsBetweenConsonants($text){
    $str = strtolower($text);
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $consonants = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z'];
    $len = strlen($text);
    $countV = 0;
    if ($len >= 3 && $len <= 255){
        for ($i=1; $i < $len - 1; $i++) {
            if (in_array($str[$i-1], $consonants) && (in_array($str[$i], $vowels)) && in_array($str[$i+1] , $consonants)){
                $countV +=1;
            }
        }
    } else {
        echo 'The lenght of the string must be between 3 - 255 characters!';
        die();
    }

    echo $countV;

}


$text = fgets(STDIN);

vowelsBetweenConsonants($text);


//todo to make an UI for this algorithm;
//todo run the program from CLI;
