<?php


function displayMulti($x, $y){
    for ($i = 1; $i <= $y; ++$i) {
        echo $x * $i . ' ';
    }
}

fscanf(STDIN, "%d %d",  $x, $y);

displayMulti($x, $y);