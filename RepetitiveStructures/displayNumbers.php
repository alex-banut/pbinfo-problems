<?php

function displayNumbers($n){
    for ($i = $n; $i >= 1; $i--){
        echo ($n +1) - $i . ' ';
    }
}

$n = fgets(STDIN);

displayNumbers($n);