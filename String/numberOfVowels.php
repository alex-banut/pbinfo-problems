<?php

//problem from https://www.pbinfo.ro/probleme/890/nrvocale
// function counts all vowels and displays the most found vowel;

function numberOfVowels($text){
    $len = strlen($text);

    $countA = 0;
    $vowelA = '';

    $countE = 0;
    $vowelE = '';

    $countI = 0;
    $vowelI = '';

    $countO = 0;
    $vowelO = '';

    $countU = 0;
    $vowelU = '';

    for ($i = 0; $i < $len; $i++){
        if ($text[$i] == 'a' || $text[$i] == 'A'){
            $vowelA = strtoupper($text[$i]);
            $countA = $countA + 1;
        } elseif ($text[$i] == 'e' || $text[$i] == 'E'){
            $vowelE = strtoupper($text[$i]);
            $countE = $countE + 1;
        } elseif ($text[$i] == 'i' || $text[$i] == 'I') {
            $vowelI = strtoupper($text[$i]);
            $countI = $countI + 1;
        } elseif ($text[$i] == 'o' || $text[$i] == 'O') {
            $vowelO = strtoupper($text[$i]);
            $countO = $countO + 1;
        } elseif ($text[$i] == 'u' || $text[$i] == 'U') {
            $vowelU = strtoupper($text[$i]);
            $countU = $countU + 1;
        }
    }

    if (max($countA, $countE, $countI, $countO, $countU) == $countA){
        echo $vowelA;
    } elseif (max($countA, $countE, $countI, $countO, $countU) == $countE){
        echo $vowelE;
    } elseif (max($countA, $countE, $countI, $countO, $countU) == $countI){
        echo $vowelI;
    } elseif (max($countA, $countE, $countI, $countO, $countU) == $countO){
        echo $vowelO;
    } elseif (max($countA, $countE, $countI, $countO, $countU) == $countU){
        echo $vowelU;
    }
}


$text = fgets(STDIN);

numberOfVowels($text);

?>