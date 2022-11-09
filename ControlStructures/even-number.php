<?php

function verifyEven($n){
    if ($n % 2 == 0){
        echo $n . ' este par';
    } else {
        echo $n . ' este impar';
    }
}

fscanf(STDIN, "%d",  $n);

verifyEven($n);