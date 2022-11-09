<?php

//problem found on https://www.pbinfo.ro/probleme/1866/prosir

//function to replace the last character from each word from the string with number 5;
//last word from the string ends with . so the character before . gets replaced with 5 too;

function replaceLastCharacter($text){
    $text = strtolower($text);
    $len = strlen($text);

    for ($i = 0; $i < $len-1; $i++){
        if ( $text[$i+1] == ' ' || $text[$i+1] == '.'){
            $text[$i] = 5;
        }
    }

    $myfile = fopen("prosir.out", "w") or die("Unable to open file!");
    fwrite($myfile, $text);
}

$text = fopen("prosir.in", "r") or die("Unable to open file!");
$text = fwrite('prosir.in', 'teste de teste.');

replaceLastCharacter($text);

?>