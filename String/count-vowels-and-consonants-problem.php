<?php

//problem found on https://learnetutorials.com/php/programs/count-vowel-and-consonants


//function to count the number of vowels and consonants from a $text which holds the string;


function countVowelAndConsonant($text)
{
    $str = strtolower($text);
    $countV = 0;
    $countC = 0;
    $len = strlen($text);
    for ($i = 0; $i < $len; $i++){
        if ($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u'){
            $countV += 1;
        } elseif ($str[$i] >= 'a' && $str[$i] <= 'z'){
            $countC += 1;
        }
    }

    echo 'Number of Vowels is: ' . $countV;
    echo '<br>';
    echo 'Number of Consonants is: ' . $countC;
}


$text = fgets(STDIN);

countVowelAndConsonant($text);

//todo improvement to count the number of special chars given in the string;
//todo make an UI for this algorithm;
//todo run program from CLI;








