<?php

function intervals($a, $b, $x){
    if (($a <= $x) && ($x <= $b)){
        echo 'DA';
    } else {
        echo 'NU';
    }
}

fscanf(STDIN, "%d %d %d",  $a, $b, $x);

intervals($a, $b, $x);