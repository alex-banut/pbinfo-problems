<?php

function elementeOrdonate($n, $str){
    $arr = explode(' ', $str);

    $areSorted = true;

    for ($i = 1; $i < $n; $i++){
        if ($arr[$i-1] > $arr[$i]){
            $areSorted = false;
            break;
        } else {
            $areSorted = true;
        }
    }

    if ($areSorted){
        echo "DA";
    } else {
        echo "NU";
    }
}

$n = fgets(STDIN);
$str = fgets(STDIN);
elementeOrdonate($n, $str);