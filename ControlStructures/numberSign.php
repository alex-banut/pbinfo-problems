<?php

function sign($n){
    if ( $n > 0){
        echo 'pozitiv';
    } elseif ( $n < 0){
        echo 'negativ';
    } else{
        echo 'nul';
    }
}

$n = fgets(STDIN);

sign($n);