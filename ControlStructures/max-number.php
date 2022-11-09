<?php

function maxNumber($a, $b){
    if ($a < $b){
        echo $b;
    } else {
        echo $a;
    }
}

fscanf(STDIN, "%d %d",  $a, $b);

maxNumber($a, $b);