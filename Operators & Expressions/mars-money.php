<?php

//problem from https://www.pbinfo.ro/probleme/3180/marte1

function marsMoney($a, $b, $c, $n, $m, $p){
    $type1 = $a * $n;
    $type2 = $b * $m;
    $type3 = $c * $p;

    echo $type1 + $type2 + $type3;
}
fscanf(STDIN, "%d %d %d\n", $a, $b, $c);
fscanf(STDIN, "%d %d %d\n", $n, $m, $p);

marsMoney($a, $b, $c, $n, $m, $p);