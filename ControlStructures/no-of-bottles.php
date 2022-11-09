<?php

function noOfBottles($bottles, $liters){
    $bottle = 1;

    for ($i = $bottles; $i < $liters; $i = $i + $bottles){
        $bottle = $bottle + 1;
    }

    echo $bottle;
}

fscanf(STDIN, "%d %d",  $x, $y);
noOfBottles($x, $y);