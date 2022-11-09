<?php

function equalNumbers($n){
    $digit1 = $n % 10;
    $n = intval($n / 10);
    $digit2 = $n % 10;
    $digit3 = intval($n / 10);

    if (($digit1 == $digit2) && ($digit1 ==$digit3)){
        echo 'da';
    } else {
        echo 'nu';
    }
}

$n = fgets(STDIN);

equalNumbers($n);