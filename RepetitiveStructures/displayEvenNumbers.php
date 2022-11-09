<?php

function displayEvenNumbers($n){
    for ($i = 1; $i <= $n * 2; $i++){
        if ($i % 2 == 0){
            echo $i . ' ';
        }
    }
}


$n = fgets(STDIN);

displayEvenNumbers($n);