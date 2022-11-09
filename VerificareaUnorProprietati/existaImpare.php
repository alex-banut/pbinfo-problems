<?php

function existaImpare($n, $str)
{
    $arr = explode(' ', $str);

    $oddExists = false;

    for ($i = 0; $i < $n; $i++){
        if ($arr[$i] % 2 != 0){
            $oddExists = true;
            break;
        } elseif ($arr[$i] % 2 == 0){
            $oddExists = false;
        }
    }

    if ($oddExists){
        echo "DA";
    } else {
        echo "NU";
    }



}

$n = fgets(STDIN);

$str = fgets(STDIN);

existaImpare($n, $str);