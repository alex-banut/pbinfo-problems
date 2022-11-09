<?php


function elementsDifferent($n, $str){
    $arr = explode(' ', $str);

    $areDifferent = true;

    for ($i = 0; $i < $n - 1; $i++){
        if ($arr[$i] == $arr[$i+1]){
            $areDifferent = false;
            break;
        } else {
            $areDifferent = true;
        }
    }

    if ($areDifferent){
        echo "DA";
    } else {
        echo "NU";
    }
}



$n = fgets(STDIN);
$str = fgets(STDIN);
elementsDifferent($n, $str);