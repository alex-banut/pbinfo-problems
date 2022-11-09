<?php

//problem from https://www.pbinfo.ro/probleme/813/globuri;

function calculateGlobes($a){
    $b = $a * 2;
    $c = $b - 3;
    echo $a + $b + $c;
}

$a = fgets(STDIN);

calculateGlobes($a);