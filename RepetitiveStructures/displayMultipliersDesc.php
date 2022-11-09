<?php

function dispMultDesc($n, $m){
    for ($i = $n; $i >= 1; $i--){
        echo $i * $m . ' ';
    }

}

fscanf(STDIN, "%d %d", $n, $m);

dispMultDesc($n, $m);