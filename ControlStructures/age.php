<?php

function age($a, $b){
    if ($a > $b){
        echo 'Primul copil este mai mare cu ' . $a - $b . ' ani';
    } elseif ($a - $b == 0){
        echo 'Copiii au varste egale';
    } else {
        echo 'Al doilea copil este mai mare cu ' . $b - $a . ' ani';
    }
}

fscanf(STDIN, "%d %d",  $a, $b);

age($a, $b);