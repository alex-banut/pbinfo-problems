<?php


function suntEgale($n, $str){
    $arr = explode(' ', $str);

    $areEqual = false;

    for ($i = 0; $i < $n-1; $i++){
        if ($arr[$i] != $arr[$i+1]){
            $areEqual = false;
            break;
        } else {
            $areEqual = true;
        }
    }

    if ($areEqual){
        echo "DA";
    } else {
        echo "NU";
    }

}
$n = fgets(STDIN);
$str = fgets(STDIN);
suntEgale($n, $str);