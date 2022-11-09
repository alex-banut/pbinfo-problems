<?php

//problem https://www.pbinfo.ro/probleme/2263/camioane

function trucksCalc($t1, $t2, $n, $m, $z){
    $type1 = $n * $t1;
    $type2 = $m * $t2;
    echo ($type1 + $type2) * $z;
}

fscanf(STDIN, "%d %d %d %d %d", $t1, $t2, $n, $m, $z);

trucksCalc($t1, $t2, $n, $m, $z);