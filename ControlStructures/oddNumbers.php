<?php

function oddNumbers($n){

    $countOdd = 0;

    while ($n != 0){
        $lastDigit = $n % 10;
        if ($lastDigit % 2 != 0){
            $countOdd = $countOdd + 1;
        }
        $n = intval($n / 10);
    }

    echo $countOdd;
}

$n = fgets(STDIN);
oddNumbers($n);