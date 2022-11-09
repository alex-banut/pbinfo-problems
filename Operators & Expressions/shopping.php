<?php

function calcShop($a, $b){
    $boxes = intval($b/$a);
    $money = ($boxes + 1) * $a - $b;
    echo $boxes . ' ' . $money;
}

fscanf(STDIN, "%d %d", $a, $b);

calcShop($a, $b);
