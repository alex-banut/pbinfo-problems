<?php

//problem from https://www.pbinfo.ro/probleme/3178/copii2;

function pagesRead($f, $b, $n){
    $f = $f * 3;
    $b = $b * 2;
    echo ($f + $b) * $n;
}

fscanf(STDIN, "%d %d %d", $f, $b, $n);

pagesRead($f, $b, $n);