<?php

// problem found on https://www.pbinfo.ro/probleme/1456/cuvant

// function function will show YES if the words are made only from consonants & consonants + i, else will show NO.

function onlyConsonantsAndI($text){
    $str = strtolower($text);
    $len = strlen($text);
    $result = '';
    for ($i=0; $i<$len; $i++) {
        if ($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'o' || $str[$i] == 'u'){
            $result = 'NU';
            break;
        } else {
            $result = 'DA';
        }
    }
    echo $result;
}

$text = fgets(STDIN);

onlyConsonantsAndI($text);