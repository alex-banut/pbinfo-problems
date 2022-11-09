<?php

function existaPare($n, $str)
{
    $arr = explode(' ', $str);

    $evenExists = false;

    for ($i = 0; $i < $n; $i++){
        if ($arr[$i] % 2 == 0){
            $evenExists = true;
        } elseif ($arr[$i] % 2 != 0){
            $evenExists = false;
            break;
        }
    }

    if ($evenExists){
        echo "DA";
    } else {
        echo "NU";
    }



}

$n = fgets(STDIN);

$str = fgets(STDIN);

existaPare($n, $str);