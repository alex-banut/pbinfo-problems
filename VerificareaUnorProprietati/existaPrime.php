<?php

function primeCheck($number){
    if ($number == 1)
        return 0;
    for ($i = 2; $i <= sqrt($number); $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}


function existaPrim($n, $str){

    $arr = explode(' ', $str);

    $containsPrime = false;

    for ($i = 0; $i < $n; $i++){
        if (primeCheck($arr[$i])){
            $containsPrime = true;
            break;
        } else {
            $containsPrime = false;
        }
    }

    if ($containsPrime){
        echo "DA";
    } else {
        echo "NU";
    }
}



$n = fgets(STDIN);

$str = fgets(STDIN);

existaPrim($n, $str);