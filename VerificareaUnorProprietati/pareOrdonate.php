<?php

function pareOrdonate($n, $str){
    $arr = explode(' ', $str);

    $suntPareOrdonate = true;

    $even = [];

    for ($i = 0; $i < $n; $i++){
        if ($arr[$i] % 2 == 0){
            $even[] = $arr[$i];
        }
    }

    $len = count($even);

    for ($j = 0; $j < $len - 1; $j++){
        if ($even[$j] > $even[$j+1]){
            $suntPareOrdonate = false;
            break;
        } elseif ($even[$j] > $even[$j+1]) {
            $suntPareOrdonate = true;
        }
    }

    if ($suntPareOrdonate){
        echo "DA";
    } else {
        echo "NU";
    }
}

$n = fgets(STDIN);
$str = fgets(STDIN);
pareOrdonate($n, $str);