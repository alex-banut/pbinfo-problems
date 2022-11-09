<?php

function displayOddNumbers($n){
    for ($i = $n * 2; $i > 0; $i--){
        if ($i % 2 != 0){
            echo $i . ' ';
        }
    }
}

$n = fgets(STDIN);

displayOddNumbers($n);