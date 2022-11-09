<?php

function sameSign($a, $b){
    if ($a > 0 && $b > 0){
        echo 'da';
    }elseif ($a > 0 && $b < 0){
        echo 'nu';
    } else {
        echo 'nu';
    }
}

fscanf(STDIN, "%d %d",  $a, $b);
sameSign($a, $b);