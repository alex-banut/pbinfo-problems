<?php

//problem found on https://www.pbinfo.ro/probleme/12/initiale

// function to uppercase the first and last character of each word from a $text variable which holds a string;


function startEndUpper($text){
    $text = strtolower($text);
    $len = strlen($text);

    for ($i = 0; $i < $len; $i++){
        if ($i == 0 || $i == $len - 1 || $text[$i - 1] == ' ' || $text[$i + 1] == ' ') {
            $text[$i] = strtoupper($text[$i]);
        }
    }

    echo $text;
}

$text = fgets(STDIN);

startEndUpper($text);


?>